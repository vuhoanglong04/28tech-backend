<?php

namespace App\Services;

use App\Models\UserClasses;
use App\Services\Interfaces\UserClassesInterface;

/**
 * Class UserClasses
 * @package App\Services
 */
class UserClassesService implements UserClassesInterface
{
    protected $model;
    public function __construct(UserClasses $userClasses)
    {
        $this->model = $userClasses;
    }
    public function all()
    {
    }
    public function findByClass($id)
    {
        return $this->model->where('class_id', $id)->get();
    }
    public function update($class_id, array $data)
    {
        $data["class_id"] = $class_id;
        return $this->model->create($data);
    }
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }
}
