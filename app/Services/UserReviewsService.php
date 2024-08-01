<?php

namespace App\Services;

use App\Models\UserReviews;
use App\Services\Interfaces\UserReviewsServiceInterface;

/**
 * Class UserReviewsService
 * @package App\Services
 */
class UserReviewsService implements UserReviewsServiceInterface
{
    protected $model;
    public function __construct(UserReviews $userReviews)
    {
        $this->model = $userReviews;
    }
    public function all()
    {
    }
    public function findByCourse($id)
    {
        return $this->model->where('course_id', $id)->get();
    }
    public function create(array $data)
    {
        unset($data["_token"]);
        return $this->model->create($data);
    }
    public function update($id, array $data)
    {

    }
    public function delete($id)
    {
    }
    public function restore($id)
    {
    }
    public function forceDelete($id)
    {
        return $this->model->where('id', $id)->forceDelete();
    }
}
