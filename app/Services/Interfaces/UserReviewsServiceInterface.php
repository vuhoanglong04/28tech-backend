<?php

namespace App\Services\Interfaces;

/**
 * Interface UserReviewsServiceInterface
 * @package App\Services\Interfaces
 */
interface UserReviewsServiceInterface
{
    public function all();
    public function findByCourse($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function restore($id);
    public function forceDelete($id);
}
