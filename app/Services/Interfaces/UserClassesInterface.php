<?php

namespace App\Services\Interfaces;

/**
 * Interface UserClassesInterface
 * @package App\Services\Interfaces
 */
interface UserClassesInterface
{
    public function all();
    public function findByClass($id);
    public function update($class_id, array $data);
    public function delete($id);
}
