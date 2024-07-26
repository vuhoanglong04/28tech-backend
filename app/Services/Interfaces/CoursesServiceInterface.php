<?php

namespace App\Services\Interfaces;

/**
 * Interface CoursesServiceInterface
 * @package App\Services\Interfaces
 */
interface CoursesServiceInterface
{
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
