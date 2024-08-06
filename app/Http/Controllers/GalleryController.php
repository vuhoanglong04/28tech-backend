<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courses;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
        $users = User::withTrashed()->get();
        $courses = Courses::withTrashed()->get();
        return view('gallery' , compact('users' , 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
  

}
