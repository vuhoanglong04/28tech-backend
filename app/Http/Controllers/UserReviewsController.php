<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\UserReviewsServiceInterface;
use Illuminate\Http\Request;

class UserReviewsController extends Controller
{
    protected $userReviewsService;
    public function __construct(UserReviewsServiceInterface $userReviewsService)
    {
        $this->userReviewsService = $userReviewsService;
    }
    public function index()
    {
        //
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
        $request->validate([
            'comments' => "required"
        ], [
            "comments.required" => "Comment is required"
        ]);
        $input = $request->all();
        $this->userReviewsService->create($input);
        return back()->with('success', 'OK');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    }
    public function restore(string $id)
    {

    }

    public function forceDelete(string $id)
    {
        $this->userReviewsService->forceDelete($id);
        return back()->with('delete',"OK");
    }
}
