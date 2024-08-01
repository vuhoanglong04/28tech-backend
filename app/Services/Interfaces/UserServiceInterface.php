<?php

namespace App\Services\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface UserServiceInterface
{
    public function all();
    public function paginate();

    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function findByEmail($email);
    public function restore($id);
    public function forceDelete($id);
    public function updateImage($id, $data);
}
