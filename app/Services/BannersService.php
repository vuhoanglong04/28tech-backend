<?php

namespace App\Services;

use App\Models\Banners;
use App\Services\Interfaces\BannersServiceInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

/**
 * Class BannersService
 * @package App\Services
 */
class BannersService implements BannersServiceInterface
{
    protected $model;
    public function __construct(Banners $banners)
    {
        $this->model = $banners;
    }
    public function all()
    {
        return $this->model->withTrashed()->get();
    }
    public function find($id)
    {
        return $this->model->withTrashed()->find($id);

    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update($id, array $data)
    {
        unset($data["_token"]);
        unset($data["_method"]);
        $banner = $this->model->withTrashed()->where('id', $id)->first();
        Cloudinary::destroy($banner->banner_public_id);
        return $banner->update($data);

    }
    public function delete($id)
    {
        return $this->model->withTrashed()->where('id', $id)->delete();

    }
    public function restore($id)
    {
        return $this->model->withTrashed()->where('id', $id)->restore();

    }
    public function forceDelete($id)
    {
        $banner = $this->model->withTrashed()->where('id', $id)->first();
        Cloudinary::destroy($banner->banner_public_id);
        return $banner->forceDelete();
    }
}
