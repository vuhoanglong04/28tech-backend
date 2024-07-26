<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursesRequest;
use App\Services\Interfaces\CategoriesServiceInterface;
use App\Services\Interfaces\CoursesServiceInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    protected $categoriesService;
    protected $coursesService;
    protected $cloudinaryImage;

    public function __construct(CoursesServiceInterface $coursesService, CategoriesServiceInterface $categoriesService, Cloudinary $cloudinaryImage)
    {
        $this->coursesService = $coursesService;
        $this->categoriesService = $categoriesService;
        $this->cloudinaryImage = $cloudinaryImage;

    }
    public function index()
    {
        $courses = $this->coursesService->all();
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
        return view('courses.detail', compact('course'));
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
        //
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
        //
    }

    public function forceDelete(string $id)
    {
        //
    }
}
