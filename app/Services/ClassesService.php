<?php

namespace App\Services;

use App\Models\Classes;
use App\Services\Interfaces\ClassesServiceInterface;

/**
 * Class ClassesService
 * @package App\Services
 */
class ClassesService implements ClassesServiceInterface
{
    protected $model;
    public function __construct(Classes $classes)
    {
        $this->model = $classes;
    }
    public function all()
    {
        return $this->model->withTrashed()->orderBy('id', 'desc')->get();
    }
    public function paginate()
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
        unset($data['_token']);
        unset($data['_method']);

        return $this->model->withTrashed()->where('id', $id)->update($data);

    }
    public function delete($id)
    {
        return $this->model->withTrashed()->where('id', $id)->delete();
    }
    public function restore($id)
    {
        return $this->model->withTrashed()->where('id', $id)->restore();

    }
    public function forceDelete($id)
    {
        return $this->model->withTrashed()->where('id', $id)->forceDelete();

    }

}
