<?php

namespace App\Http\Controllers;

use App\Models\Modules;
use Illuminate\Http\Request;
use App\Http\Requests\GroupsRequest;
use Illuminate\Support\Facades\Validator;
use App\Services\Interfaces\GroupsServiceInterface;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $groupsService;
    public function __construct(GroupsServiceInterface $groupsService)
    {
        $this->groupsService = $groupsService;
    }
    public function index()
    {
        $groups = $this->groupsService->all();
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
                'group_name' => "required | unique:groups,group_name",
            ],
            [
                'group_name.required' => "Group name must be required",
                'group_name.unique' => "Group name must be unique"
            ]
        );
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'data' => $validator->errors()
            ];
            return $arr;
        }
        return
            [
                'success' => true,
                'data' => $this->groupsService->create($request->all())
            ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = $this->groupsService->find($id);
        $modules = Modules::all();
        return view('groups.detail', compact('group', 'modules'));
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
    public function update(Request $request, string $id)
    {
        if ($request->permissions) {
            $this->groupsService->update($id, $request->all());
            return back()->with('success', "OK");
        } else
            return $this->groupsService->update($id, $request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->groupsService->delete($id);
    }
}
