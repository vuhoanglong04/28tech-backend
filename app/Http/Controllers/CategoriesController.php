<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\Interfaces\CategoriesServiceInterface;

class CategoriesController extends Controller
{
    protected $categoriesService;
    public function __construct(CategoriesServiceInterface $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }
    public function index()
    {
        $categories = $this->categoriesService->all();
        return view('categories.index', compact('categories'));
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
        $validator = Validator::make($input, [
            "category_name" => "required | unique:categories,category_name",
        ], [
            "category_name.required" => "Category name is required",
            "category_name.unique" => "Category name is unique"
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'data' => $validator->errors()
            ];
            return $arr;
        }
        $this->categoriesService->create($request->all());
        return $arr = [
            'success' => true,
        ];

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

        $input = $request->all();
        $validator = Validator::make($input, [
            "category_name" => "required",
        ], [
            "category_name.required" => "Category name is required",
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'data' => $validator->errors()
            ];
            return $arr;
        }
        $this->categoriesService->update($id, $input);
        return $arr = [
            'success' => true,
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->categoriesService->delete($id);
    }

    public function restore(string $id)
    {
        return $this->categoriesService->restore($id);
    }

    public function forceDelete(Request $request, string $id)
    {
        if ($request->list) {
            foreach ($request->list as $value) {

                $this->categoriesService->forceDelete($value);
            }
            return true;

        } else {
            $this->categoriesService->forceDelete($id);
            return true;
        }
    }
}
