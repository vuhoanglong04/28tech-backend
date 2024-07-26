<?php

namespace App\Services\Interfaces;

/**
 * Interface GroupsServiceInterface
 * @package App\Services\Interfaces
 */
interface GroupsServiceInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
