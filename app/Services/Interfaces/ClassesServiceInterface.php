<?php

namespace App\Services\Interfaces;

/**
 * Interface ClassesServiceInterface
 * @package App\Services\Interfaces
 */
interface ClassesServiceInterface
{
    public function all();
    public function paginate();

    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function restore($id);
    public function forceDelete($id);

}
