<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\VouchersServiceInterface;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class VouchersController extends Controller
{
    protected $vouchersService;
    public function __construct(VouchersServiceInterface $voucherService)
    {
        $this->vouchersService = $voucherService;
    }
    public function index()
    {
        $vouchers = $this->vouchersService->all();
        return view('vouchers.index', compact('vouchers'));
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
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'code' => 'required|unique:vouchers,code|min:10 | max:10',
                'discounts' => 'required|numeric',
                'date_start' => 'required|date',
                'date_expire' => 'required|date|after:date_start',
            ],
            [
                'code.required' => 'The voucher code is required.',
                'code.unique' => 'The voucher code must be unique.',
                'code.min' => 'The voucher code must be  10 characters long.',
                'code.max' => 'The voucher code must be  10 characters long.',
                'discounts.required' => 'The discount value is required.',
                'discounts.numeric' => 'The discount value must be a number.',
                'date_start.required' => 'The start date is required.',
                'date_start.date' => 'The start date must be a valid date.',
                'date_expire.required' => 'The expiration date is required.',
                'date_expire.date' => 'The expiration date must be a valid date.',
                'date_expire.after' => 'The expiration date must be after the start date.',
            ]
        );
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'data' => $validator->errors()
            ];
            return $arr;
        }
        $this->vouchersService->create($input);
        return [
            'success' => true
        ];
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
        $voucher = $this->vouchersService->findByCode($id);
        return view('vouchers.edit', compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $validator = $request->validate(
            [
                'code' => 'required|min:10 | max:10',
                'discounts' => 'required|numeric',
                'date_start' => 'required|date',
                'date_expire' => 'required|date|after:date_start',
            ],
            [
                'code.required' => 'The voucher code is required.',
                'code.min' => 'The voucher code must be  10 characters long.',
                'code.max' => 'The voucher code must be  10 characters long.',
                'discounts.required' => 'The discount value is required.',
                'discounts.numeric' => 'The discount value must be a number.',
                'date_start.required' => 'The start date is required.',
                'date_start.date' => 'The start date must be a valid date.',
                'date_expire.required' => 'The expiration date is required.',
                'date_expire.date' => 'The expiration date must be a valid date.',
                'date_expire.after' => 'The expiration date must be after the start date.',
            ]
        );
         $this->vouchersService->update($id, $input);
         return redirect()->route('admin.vouchers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->vouchersService->delete($id);
    }
}
