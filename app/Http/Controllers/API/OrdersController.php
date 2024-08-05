<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Orders;
use App\Jobs\SendMailThanks;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Orders::where('user_id', $request->user_id)->get();
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

        $order = Orders::create($request->all());
        for ($i = 0; $i < count($request->details); $i++) {
            $detail = $request->details[$i];
            $detail["order_id"] = $order->id;
            OrderDetails::create($detail);
        }
        $user = User::where('id' , $request->user_id)->first();
        SendMailThanks::dispatch($user->email)->delay(now()->addSeconds(5));
        return response()->json([
            'message' => 'Order has been successfully saved.',
            'data' => $order
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $order = Orders::where('id', $id)->with(['user' , 'voucher' , 'reviews'])->first();
        $details = OrderDetails::where('order_id', $id)->with(['course' , 'class'])->get();
        return response()->json([$order, $details], 200);

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
        $order = Orders::where('id', $id)->first();
        $order->status = $request->status;
        $order->save();
        return response()->json([
            'message' => 'Order updated successfully.',
            'data' => $order
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
