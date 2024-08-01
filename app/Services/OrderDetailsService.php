<?php

namespace App\Services;

use App\Models\OrderDetails;
use App\Services\Interfaces\OrderDetailsInterface;

/**
 * Class OrderDetails
 * @package App\Services
 */
class OrderDetailsService implements OrderDetailsInterface
{
    protected $model;
    public function __construct(OrderDetails $orderDetails)
    {
        $this->model = $orderDetails;
    }
    public function all()
    {
    }
    public function paginate()
    {
    }
    public function findByOrderID($id)
    {
        return $this->model->where('order_id', $id)->paginate(10);
    }
    public function create(array $data)
    {
    }
}
