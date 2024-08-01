<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursesRequest;
use App\Services\Interfaces\CategoriesServiceInterface;
use App\Services\Interfaces\CoursesServiceInterface;
use App\Services\Interfaces\UserReviewsServiceInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    protected $categoriesService;
    protected $coursesService;
    protected $cloudinaryImage;
    protected $userReviewsService;

    public function __construct(
        CoursesServiceInterface $coursesService,
        CategoriesServiceInterface $categoriesService,
        Cloudinary $cloudinaryImage,
        UserReviewsServiceInterface $userReviewsService
    ) {
        $this->coursesService = $coursesService;
        $this->categoriesService = $categoriesService;
        $this->cloudinaryImage = $cloudinaryImage;
        $this->userReviewsService = $userReviewsService;
    }
    public function index()
    {
        $courses = $this->coursesService->paginate();
        return view("courses.index", compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoriesService->all();

        return view("courses.add", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CoursesRequest $request)
    {
        $input = $request->all();
        // dd($input);
        $this->cloudinaryImage = $request->file('image')->storeOnCloudinary('courses');
        $urlImage = $this->cloudinaryImage->getSecurePath();
        $image_public_id = $this->cloudinaryImage->getPublicId();
        $input["image"] = $urlImage;
        $input["image_public_id"] = $image_public_id;

        $this->cloudinaryImage = $request->file('background')->storeOnCloudinary('courses');
        $urlBackground = $this->cloudinaryImage->getSecurePath();
        $background_public_id = $this->cloudinaryImage->getPublicId();
        $input["background"] = $urlBackground;
        $input["background_public_id"] = $background_public_id;


        $newCourse = $this->coursesService->create($input);
        if ($newCourse)
            return redirect()->route('admin.courses.index')->with('success', 'Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = $this->coursesService->find($id);
        $categories = $this->categoriesService->all();
        $reviews = $this->userReviewsService->findByCourse($id);
        return view('courses.detail', compact('course', 'categories', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = $this->coursesService->find($id);
        $categories = $this->categoriesService->all();

        return view('courses.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        if (
            $request->lessons || $request->delete_lessons || $request->update_lesson || $request->delete_section
            || $request->change_name_lesson
        ) {
            return $this->coursesService->update($id, $input);

        } else {
            $this->validate($request, app(CoursesRequest::class)->rules());
            if ($request->hasFile('image')) {
                Cloudinary::destroy($this->coursesService->find($id)->image_public_id);
                $this->cloudinaryImage = $request->file('image')->storeOnCloudinary('courses');
                $urlImage = $this->cloudinaryImage->getSecurePath();
                $image_public_id = $this->cloudinaryImage->getPublicId();
                $input["image"] = $urlImage;
                $input["image_public_id"] = $image_public_id;
            }
            if ($request->hasFile('background')) {
                Cloudinary::destroy($this->coursesService->find($id)->background_public_id);
                $this->cloudinaryImage = $request->file('background')->storeOnCloudinary('courses');
                $urlBackground = $this->cloudinaryImage->getSecurePath();
                $background_public_id = $this->cloudinaryImage->getPublicId();
                $input["background"] = $urlBackground;
                $input["background_public_id"] = $background_public_id;
            }
            $this->coursesService->update($id, $input);
            return redirect()->route('admin.courses.show', $id);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        return $this->coursesService->delete($id);
    }

    public function restore(string $id)
    {

        return $this->coursesService->restore($id);
    }

    public function forceDelete(string $id)
    {


        return $this->coursesService->forceDelete($id);

    }
}
