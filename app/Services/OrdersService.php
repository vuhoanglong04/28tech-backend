<?php

namespace App\Services;

use App\Models\Orders;
use App\Services\Interfaces\OrdersServiceInterface;

/**
 * Class OrdersService
 * @package App\Services
 */
class OrdersService implements OrdersServiceInterface
{
    protected $model;
    public function __construct(Orders $orders)
    {
        $this->model = $orders;
    }
    public function all()
    {
    }
    public function paginate()
    {
        return $this->model->orderBy('id', 'desc')->paginate(5);
    }

    public function find($id)
    {
        return $this->model->where('id', $id)->first();

    }
    public function create(array $data)
    {
    }
    public function update($id, array $data)
    {
        unset($data["_token"]);
        unset($data["_method"]);
        
        return $this->model->where('id', $id)->update($data);
    }
    public function delete($id)
    {
    }
    public function restore($id)
    {
    }
    public function forceDelete($id)
    {
        $order = $this->model->where('id', $id)->first();
        //DELET ORDER DETAIL

        return $order->delete();

    }

}
