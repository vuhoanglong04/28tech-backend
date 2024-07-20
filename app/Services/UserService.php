<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    public function all(){
        
    }
    public function find($id){

    }
    public function create(array $data){
        User::create($data);
    }
    public function update($id, array $data){

    }
    public function delete($id){

    }
    public function findByEmail($email){

    }
}
