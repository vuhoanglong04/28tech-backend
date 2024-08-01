<?php

namespace App\Services;

use Exception;
use App\Models\Vouchers;
use App\Services\Interfaces\VouchersServiceInterface;

/**
 * Class VouchersService
 * @package App\Services
 */
class VouchersService implements VouchersServiceInterface
{
    public $model;
    public function __construct(Vouchers $vouchers)
    {
        $this->model = $vouchers;
    }
    public function all()
    {
        return $this->model->all();
    }
    public function findByCode($code)
    {
        return $this->model->where('code', $code)->first();
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update($id, array $data)
    {
        unset($data['_token']);
        unset($data['_method']);
        return $this->model->where('code', $id)->update($data);
    }
    public function delete($id)
    {
        try {
            $this->model->where('code', $id)->forceDelete();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
