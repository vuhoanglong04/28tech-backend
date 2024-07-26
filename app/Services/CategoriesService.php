<?php

namespace App\Services;

use App\Models\Categories;
use App\Services\Interfaces\CategoriesServiceInterface;

/**
 * Class CategoriesService
 * @package App\Services
 */
class CategoriesService implements CategoriesServiceInterface
{

    protected $model;
    public function __construct(Categories $categories)
    {
        $this->model = $categories;
    }
    public function all()
    {
        return $this->model->withTrashed()->paginate(5);
    }
    public function find($id)
    {
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update($id, array $data)
    {
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
