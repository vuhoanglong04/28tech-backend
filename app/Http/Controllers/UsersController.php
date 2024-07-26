<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Validator;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\Interfaces\GroupsServiceInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $userService;
    protected $groupService;
    protected $cloudinaryImage;
    public function __construct(UserServiceInterface $userService, GroupsServiceInterface $groupService, Cloudinary $cloudinaryImage)
    {
        $this->userService = $userService;
        $this->groupService = $groupService;
        $this->cloudinaryImage = $cloudinaryImage;
    }
    public function index()
    {
        $users = $this->userService->all();
        $groups = $this->groupService->all();
        // dd($users);
        return view('users.index', compact('users', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                "name" => "required",
                "email" => "required|email:rfc,dns | unique:users,email",
                "password" => "required|min:5",
                "phone_number" => "required",
                "group_id" => "required",
                "image" => ["nullable", 'mimes:jpeg,png', 'max:5120'],
            ],
            [
                "name.required" => "Name is required",
                "phone_number.required" => "Phone number is required",
                "email.required" => "Email is required",
                "email.email" => "Email is not valid",
                "email.unique" => "Email is unique",
                "password.required" => "Password is required",
                "password.min" => "Password must be at least :min characters",
                'image.mimes' => 'The :attribute must be a file of type: :values.',
                'image.max' => 'The :attribute may not be greater than :max kilobytes.',
                "group_id.required" => "Please select group",
            ]
        );
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'data' => $validator->errors()
            ];
            return $arr;
        }
        unset($input["image"]);
        if ($request->hasFile("image")) {
            $this->cloudinaryImage = $request->file('image')->storeOnCloudinary('users');
            $url = $this->cloudinaryImage->getSecurePath();
            $public_id = $this->cloudinaryImage->getPublicId();
            $input["image"] = $url;
            $input["image_public_id"] = $public_id;
        }
        $newUser = $this->userService->create($input);
        if ($newUser) {
            $arr = [
                'success' => true,
                'data' => $newUser
            ];
            return $arr;
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->userService->find($id);
        $groups = $this->groupService->all();

        return view('users.detail', compact('user', 'groups'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request)
    {


        if ($request->hasFile("image")) {
            $data = [];
            $user = $this->userService->find($id);
            if ($user->image_public_id)
                Cloudinary::destroy($user->image_public_id);
            $this->cloudinaryImage = $request->file('image')->storeOnCloudinary('users');
            $url = $this->cloudinaryImage->getSecurePath();
            $public_id = $this->cloudinaryImage->getPublicId();
            $data["image"] = $url;
            $data["image_public_id"] = $public_id;
            return $this->userService->updateImage($id, $data);
        } else {
            $request->validate(
                [
                    "name" => "required",
                    "password" => "nullable |min:5",
                    "phone_number" => "required",
                    "group_id" => "required",
                    // "image" => ["nullable", 'mimes:jpeg,png', 'max:5120'],
                ],
                [
                    "name.required" => "Name is required",
                    "phone_number.required" => "Phone number is required",
                    "password.min" => "Password must be at least :min characters",
                    // 'image.mimes' => 'The :attribute must be a file of type: :values.',
                    // 'image.max' => 'The :attribute may not be greater than :max kilobytes.',
                    "group_id.required" => "Please select group",
                ]
            );
            $this->userService->update($id, $request->all());
            return back()->with('success', "Update sucessfully");
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        return $this->userService->delete($id);
    }
    public function restore(string $id)
    {
        return $this->userService->restore($id);
    }
    public function forceDelete(string $id, Request $request)
    {
        if ($request->list) {
            foreach ($request->list as $value) {

                $this->userService->forceDelete($value);
            }
            return true;

        } else {
            $this->userService->forceDelete($id);
            return true;
        }

    }
}
