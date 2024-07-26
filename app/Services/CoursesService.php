<?php

namespace App\Services;

use App\Models\Courses;
use App\Services\Interfaces\CoursesServiceInterface;

/**
 * Class CoursesService
 * @package App\Services
 */
class CoursesService implements CoursesServiceInterface
{
    protected $model;
    public function __construct(Courses $courses)
    {
        $this->model = $courses;
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
    }
    public function delete($id)
    {
        return $this->model->delete($id);
    }
}
