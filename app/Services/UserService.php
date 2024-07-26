<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $model;


    public function __construct(User $user)
    {
        $this->model = $user;

    }
    public function all()
    {
        return $this->model->withTrashed()->orderBy('id', 'desc')->paginate(5);
    }
    public function find($id)
    {
        return $this->model->withTrashed()->where('id', $id)->first();
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update($id, array $data)
    {
        $user = $this->model->where('id', $id)->first();
        $user->name = $data["name"];
        $user->phone_number = $data["phone_number"];
        $user->group_id = $data["group_id"];
        if ($data["password"])
            $user->password = $data["password"];
        $user->save();
    }
    public function delete($id)
    {
        $user = $this->model->find($id);
        if ($user) {
            $user->delete();
            return true;
        }
        return false;
    }
    public function findByEmail($email)
    {

    }

    public function restore($id)
    {
        $user = $this->model->withTrashed()->find($id);
        if ($user) {
            $user->restore();
            return true;
        }
        return false;
    }
    public function forceDelete($id)
    {

        $user = $this->model->where('id', $id)->first();
        if ($user->image_public_id)
            Cloudinary::destroy($user->image_public_id);
        $user->forceDelete();

    }
    public function updateImage($id, $data)
    {
        $user = $this->model->where('id', $id)->first();
        $user->image = $data["image"];
        $user->image_public_id = $data["image_public_id"];
        $user->save();
        return $user;
    }

}
