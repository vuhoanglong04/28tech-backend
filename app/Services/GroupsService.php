<?php

namespace App\Services;

use Exception;
use Throwable;
use App\Models\Groups;
use App\Services\Interfaces\GroupsServiceInterface;

/**
 * Class GroupsService
 * @package App\Services
 */
class GroupsService implements GroupsServiceInterface
{

    protected $model ;
    public function __construct(Groups $groups){
        $this->model = $groups;
    }
    public function all()
    {
        return $this->model::withTrashed()->get();

    }
    public function find($id)
    {
        return $this->model::withTrashed()->find($id);

    }
    public function create(array $data)
    {
        return $this->model::create($data);
        
    }
    public function update($id, array $data)
    {
        $group = $this->model::withTrashed()->find($id);
        if ($group) {
            $group->update($data);
            if ($data["deleted_at"] == 0)
                $group->delete();
            else
                $group->restore();
            return true;
        }
        return false;
    }
    public function delete($id)
    {
        $group = $this->model::withTrashed()->find($id);
        try {
            $group->forceDelete();
            return true;
        } catch (Throwable $e) {
            return false;
        }
    }
}
