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

    protected $model;
    public function __construct(Groups $groups)
    {
        $this->model = $groups;
    }
    public function all()
    {
        return $this->model::withTrashed()->get();

    }
    public function find($id)
    {
        return $this->model::withTrashed()->where('id', $id)->first();

    }
    public function create(array $data)
    {
        return $this->model::create($data);

    }
    public function update($id, array $data)
    {
        $group = $this->model::withTrashed()->where('id', $id)->first();

        if ($group) {

            if ($data["permissions"]) {
                //edit permissions
                unset($data["_token"]);
                unset($data["_method"]);
                unset($data["permissions"]);

                $permissions = [];
                foreach ($data as $module => $actions) {
                    $permissions[$module] = [];
                    foreach ($actions as $action) {
                        $permissions[$module][] = $action;
                    }
                }
                $group->permissions = json_encode($permissions);
                $group->save();

            } else {
                //other actions
                $group->update($data);
                if ($data["deleted_at"] == 0)
                    $group->delete();
                else
                    $group->restore();
                return true;
            }


        }
        return false;
    }
    public function delete($id)
    {
        $group = $this->model::withTrashed()->where('id', $id);
        try {
            $group->forceDelete();
            return true;
        } catch (Throwable $e) {
            return false;
        }
    }
}
