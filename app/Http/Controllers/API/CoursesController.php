<?php

namespace App\Http\Controllers\API;

use App\Models\Classes;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->category) {
            $courses = Courses::where('category_id', $request->category)->with('review')->with('category')->get();
        } else
            $courses = Courses::with('review')->get();
        return response()->json($courses);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {

        $course = Courses::where('slug', $slug)->with('review')->with('category')->first();
        $classes = Classes::where('course_id', $course->id)->with('user')->get();
        return response()->json([$course, $classes]);

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
        //
    }
}
