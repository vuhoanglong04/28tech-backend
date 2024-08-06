<?php

namespace App\Services\Interfaces;

/**
 * Interface BannersServiceInterface
 * @package App\Services\Interfaces
 */
interface BannersServiceInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function restore($id);
    public function forceDelete($id);
}
