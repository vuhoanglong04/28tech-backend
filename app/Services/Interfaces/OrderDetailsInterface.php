<?php

namespace App\Services\Interfaces;

/**
 * Interface OrderDetailsInterface
 * @package App\Services\Interfaces
 */
interface OrderDetailsInterface
{
    public function all();
    public function paginate();
    public function findByOrderID($id);
    public function create(array $data);
}
