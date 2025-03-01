<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Orders;
use App\Models\Courses;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="Dashboard";
        $courses = Courses::all();
        $orders = Orders::all();
        $totalRevenue =  0 ; 
        foreach($orders as $order) $totalRevenue += $order->total;
        $users  =  User::all();
        $monthlyRevenue = [];

    for ($i = 1; $i <= 12; $i++) {
        $monthlyRevenue[$i] = 0;
    }

    foreach ($orders as $order) {
        $month = Carbon::parse($order->created_at)->month;
        $monthlyRevenue[$month] += $order->total; 
    }
        return view('dashboard' , compact('title' , 'courses' , 'orders' , 'totalRevenue' ,'users' , 'monthlyRevenue'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
