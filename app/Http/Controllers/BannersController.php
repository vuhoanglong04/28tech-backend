<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\Interfaces\BannersServiceInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class BannersController extends Controller
{
    protected $bannerService;
    protected $cloudinaryImage;

    public function __construct(BannersServiceInterface $bannerService, Cloudinary $cloudinaryImage)
    {
        $this->bannerService = $bannerService;
        $this->cloudinaryImage = $cloudinaryImage;

    }
    public function index()
    {
        $banners = $this->bannerService->all();
        return view('banners.index', compact('banners'));
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
                "banner_url" => ["required", 'mimes:jpeg,png', 'max:5120'],
                "href" => "required",
            ],
            [
                "href.required" => "Href is required",
                "banner_url.required" => "Please upload banner",
                'banner_url.mimes' => 'Banner must be a file of type: :values.',
                'banner_url.max' => 'Banner may not be greater than :max kilobytes.',
            ]
        );

        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'data' => $validator->errors()
            ];
            return $arr;
        }
        unset($input["banner_url"]);
        if ($request->hasFile("banner_url")) {
            $this->cloudinaryImage = $request->file('banner_url')->storeOnCloudinary('banners');
            $url = $this->cloudinaryImage->getSecurePath();
            $public_id = $this->cloudinaryImage->getPublicId();
            $input["banner_url"] = $url;
            $input["banner_public_id"] = $public_id;
        }
        $newBanner = $this->bannerService->create($input);
        if ($newBanner) {
            $arr = [
                'success' => true,
                'data' => $newBanner
            ];
            return $arr;
        }
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
        $banner = $this->bannerService->find($id);
        return view('banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate(
            [
                "banner_url" => ["required", 'mimes:jpeg,png', 'max:5120'],
                "href" => "required",
            ],
            [
                "href.required" => "Href is required",
                "banner_url.required" => "Please upload banner",
                'banner_url.mimes' => 'Banner must be a file of type: :values.',
                'banner_url.max' => 'Banner may not be greater than :max kilobytes.',
            ]
        );
        $input = $request->all();
        unset($input["banner_url"]);

        if ($request->hasFile("banner_url")) {
            $this->cloudinaryImage = $request->file('banner_url')->storeOnCloudinary('banners');
            $url = $this->cloudinaryImage->getSecurePath();
            $public_id = $this->cloudinaryImage->getPublicId();
            $input["banner_url"] = $url;
            $input["banner_public_id"] = $public_id;
        }
        $this->bannerService->update($id, $input);
        return redirect()->route('admin.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->bannerService->delete($id);
    }
    public function restore(string $id)
    {
        return $this->bannerService->restore($id);

    }

    public function forceDelete(string $id)
    {

        return $this->bannerService->forceDelete($id);

    }
}
