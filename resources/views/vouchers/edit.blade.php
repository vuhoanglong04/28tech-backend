@extends('layout.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">update voucher</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="product-add global-shadow px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                    <div class="row justify-content-center">
                        <div class="col-xxl-7 col-lg-10">
                            <div class="mx-sm-30 mx-20 ">

                                <div class="card add-product p-sm-30 p-20 mb-30">
                                    <div class="card-body p-0">
                                        <div class="card-header">
                                            <h6 class="fw-500">About voucher</h6>
                                        </div>

                                        <div class="add-product__body px-sm-40 px-20">

                                            <form action="{{ route('admin.vouchers.update', $voucher->code) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-25">
                                                    <div class="form-group mb-10">
                                                        <label for="name47">Code</label>
                                                        <input type="text" class="form-control code" id="name47"
                                                            placeholder="ABCXYZ" name="code" maxlength="10"
                                                            value="{{ old('code') ?? $voucher->code }}">
                                                    </div>
                                                    @if ($errors->has('code'))
                                                        <p class="text-danger">{{ $errors->first('code') }}</p>
                                                    @endif
                                                </div>

                                                <div class="mb-25 form-group quantity-appearance">
                                                    <label>Discount</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text h-100" id="basic-addon2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="svg replaced-svg">
                                                                    <line x1="19" y1="5" x2="5"
                                                                        y2="19"></line>
                                                                    <circle cx="6.5" cy="6.5" r="2.5">
                                                                    </circle>
                                                                    <circle cx="17.5" cy="17.5" r="2.5">
                                                                    </circle>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="pt_Quantity">
                                                            <input type="number" class="form-control discounts"
                                                                min="0" step="1" max="100"
                                                                name="discounts" data-inc="1"
                                                                value="{{ old('discounts') ?? $voucher->discounts }}">
                                                            <div class="pt_QuantityNav">
                                                                <div class="pt_QuantityButton pt_QuantityUp"><i
                                                                        class="las la-angle-up"></i></div>
                                                                <div class="pt_QuantityButton pt_QuantityDown"><i
                                                                        class="las la-angle-down"></i></div>
                                                            </div>
                                                            <div class="pt_QuantityNav">
                                                                <div class="pt_QuantityButton pt_QuantityUp"><i
                                                                        class="las la-angle-up"></i></div>
                                                                <div class="pt_QuantityButton pt_QuantityDown"><i
                                                                        class="las la-angle-down"></i></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('discounts'))
                                                        <p class="text-danger">{{ $errors->first('discounts') }}</p>
                                                    @endif
                                                </div>


                                                <div class="form-group mb-20">
                                                    <label for="name1">Date Start</label>
                                                    <input type="date" class="form-control start" id="name1"
                                                        name="date_start"
                                                        value="{{ \Carbon\Carbon::parse($voucher->date_start)->format('Y-m-d') }}">
                                                    @if ($errors->has('dater_start'))
                                                        <p class="text-danger">{{ $errors->first('dater_start') }}</p>
                                                    @endif
                                                </div>

                                                <div class="form-group mb-20">
                                                    <label for="name1">Date Expired</label>
                                                    <input type="date" class="form-control expire" id="name1"
                                                        placeholder="..." name="date_expire"
                                                        value="{{ \Carbon\Carbon::parse($voucher->date_expire)->format('Y-m-d') }}">
                                                    @if ($errors->has('date_expire'))
                                                        <p class="text-danger">{{ $errors->first('date_expire') }}</p>
                                                    @endif
                                                </div>
                                                <div
                                                    class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">

                                                    <button type="submit"
                                                        class="btn btn-primary btn-default btn-squared text-capitalize">save
                                                        classes
                                                    </button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <script>
        document.querySelector('.discounts').addEventListener('input', function() {
            if (this.value > 100) this.value = 100
            if (this.value < 0) this.value = 0

        })
        document.querySelector('.code').addEventListener('input', function() {
            this.value = this.value.toUpperCase()
        })
    </script>
@endsection
