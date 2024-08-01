<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\OrderDetailsInterface;
use Illuminate\Http\Request;
use App\Services\Interfaces\OrdersServiceInterface;

class OrdersController extends Controller
{
    protected $ordersService;
    protected $orderDetailsService;

    public function __construct(OrdersServiceInterface $ordersService, OrderDetailsInterface $orderDetailsService)
    {
        $this->ordersService = $ordersService;
        $this->orderDetailsService = $orderDetailsService;
    }
    public function index()
    {
        $orders = $this->ordersService->paginate();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $allDetail = $this->orderDetailsService->findByOrderID($id);
        $order = $this->ordersService->find($id);
        return view('orders.detail', compact('order', 'allDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->ordersService->update($id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function restore(string $id)
    {
        //
    }

    public function forceDelete(string $id)
    {
        return $this->ordersService->forceDelete($id);
    }
}
