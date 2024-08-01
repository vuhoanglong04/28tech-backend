<?php

namespace App\Services\Interfaces;

/**
 * Interface VouchersServiceInterface
 * @package App\Services\Interfaces
 */
interface VouchersServiceInterface
{
    public function all();
    public function findByCode($code);
    public function update($id, array $data);
    public function delete($id);
    public function create( array $data);
}
