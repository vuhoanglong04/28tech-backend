@extends('layout.main')
@section('content')
    <style>
        .active {
            background: #8231D3;
        }

        .active span {
            color: white;
        }
    </style>
    <div class="container-fluid">
        <div class=" global-shadow wizard6 checkout-review p-sm-50 p-20 mb-50 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="cus-8 col-12">
                    <div class="d-flex justify-content-end my-2">
                        <div class="dropdown dropdown-btn dropdown-hover">
                            @if ($order->status != 3)
                                <button class="btn btn-outline-lighten fs-14 fw-400">
                                    Actions
                                </button>
                            @endif

                            <div class="dropdown-default dropdown-bottomLeft">
                                <button class="dropdown-item update_status" data-status="1"
                                    data-order="{{ $order->id }}">Cancelled</button>
                                <button class="dropdown-item update_status" data-status="2"
                                    data-order="{{ $order->id }}">Pending</button>
                                <button class="dropdown-item update_status" data-status="3"
                                    data-order="{{ $order->id }}">Done</button>

                            </div>
                        </div>
                    </div>
                    <div class="checkout-progress-indicator">
                        <h4 class="my-4 d-flex align-items-center">Order #{{ $order->id }}
                            @if ($order->status == 1)
                                <span class="dm-tag tag-danger ">Cancelled</span>
                            @elseif ($order->status == 2)
                                <span class="dm-tag tag-secondary ">Pending
                                </span>
                            @elseif ($order->status == 3)
                                <span class="dm-tag tag-primary ">Done</span>
                            @endif
                        </h4>
                    </div>

                    <div class="card crc bg-normal p-sm-30 p-15">
                        <div class="checkout-progress-indicator mb-5">
                            <div class="checkout-progress">
                                <div class="step {{ $order->status == 1 ? 'active' : '' }}" id="1"
                                    style="box-shadow:10px 0 20px #9299b826">
                                    <span>1</span>
                                    <span>Cancelled</span>
                                </div>
                                <div class="current"><svg xmlns="http://www.w3.org/2000/svg" width="182" height="6"
                                        viewBox="0 0 182 6" class="svg replaced-svg">
                                        <g id="Group_1318" data-name="Group 1318" transform="translate(-441 -521)">
                                            <circle id="Ellipse_95" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(441 521)" fill="#c5cae1" opacity="0.15"></circle>
                                            <circle id="Ellipse_95-2" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(457 521)" fill="#c5cae1" opacity="0.2"></circle>
                                            <circle id="Ellipse_95-3" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(473 521)" fill="#c5cae1" opacity="0.3"></circle>
                                            <circle id="Ellipse_95-4" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(489 521)" fill="#c5cae1" opacity="0.35"></circle>
                                            <circle id="Ellipse_95-5" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(505 521)" fill="#c5cae1" opacity="0.4"></circle>
                                            <circle id="Ellipse_95-6" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(521 521)" fill="#c5cae1" opacity="0.5"></circle>
                                            <circle id="Ellipse_95-7" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(537 521)" fill="#c5cae1" opacity="0.55"></circle>
                                            <circle id="Ellipse_95-8" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(553 521)" fill="#c5cae1" opacity="0.6"></circle>
                                            <circle id="Ellipse_95-9" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(569 521)" fill="#c5cae1" opacity="0.65">
                                            </circle>
                                            <circle id="Ellipse_95-10" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(585 521)" fill="#c5cae1"
                                                opacity="0.7"></circle>
                                            <circle id="Ellipse_95-11" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(601 521)" fill="#c5cae1"
                                                opacity="0.8">
                                            </circle>
                                            <circle id="Ellipse_95-12" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(617 521)" fill="#c5cae1"
                                                opacity="0.9"></circle>
                                        </g>
                                    </svg></div>
                                <div class="step {{ $order->status == 2 ? 'active' : '' }}" id="2"
                                    style="box-shadow:10px 0 20px #9299b826">
                                    <span>2</span>
                                    <span>Pending</span>
                                </div>
                                <div class="current"><svg xmlns="http://www.w3.org/2000/svg" width="182"
                                        height="6" viewBox="0 0 182 6" class="svg replaced-svg">
                                        <g id="Group_1318" data-name="Group 1318" transform="translate(-441 -521)">
                                            <circle id="Ellipse_95" data-name="Ellipse 95" cx="3" cy="3"
                                                r="3" transform="translate(441 521)" fill="#c5cae1" opacity="0.15">
                                            </circle>
                                            <circle id="Ellipse_95-2" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(457 521)" fill="#c5cae1"
                                                opacity="0.2"></circle>
                                            <circle id="Ellipse_95-3" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(473 521)" fill="#c5cae1"
                                                opacity="0.3"></circle>
                                            <circle id="Ellipse_95-4" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(489 521)" fill="#c5cae1"
                                                opacity="0.35"></circle>
                                            <circle id="Ellipse_95-5" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(505 521)" fill="#c5cae1"
                                                opacity="0.4"></circle>
                                            <circle id="Ellipse_95-6" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(521 521)" fill="#c5cae1"
                                                opacity="0.5"></circle>
                                            <circle id="Ellipse_95-7" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(537 521)" fill="#c5cae1"
                                                opacity="0.55"></circle>
                                            <circle id="Ellipse_95-8" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(553 521)" fill="#c5cae1"
                                                opacity="0.6"></circle>
                                            <circle id="Ellipse_95-9" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(569 521)" fill="#c5cae1"
                                                opacity="0.65"></circle>
                                            <circle id="Ellipse_95-10" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(585 521)" fill="#c5cae1"
                                                opacity="0.7"></circle>
                                            <circle id="Ellipse_95-11" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(601 521)" fill="#c5cae1"
                                                opacity="0.8"></circle>
                                            <circle id="Ellipse_95-12" data-name="Ellipse 95" cx="3"
                                                cy="3" r="3" transform="translate(617 521)" fill="#c5cae1"
                                                opacity="0.9"></circle>
                                        </g>
                                    </svg></div>
                                <div class="step {{ $order->status == 3 ? 'active' : '' }}" id="3"
                                    style="box-shadow:10px 0 20px #9299b826">
                                    <span>3</span>
                                    <span>Done</span>
                                </div>

                            </div>
                        </div>

                        <div class="card-body mb-30 bg-white bg-shadow radius-xl px-sm-30 px-15 pt-25  mb-30">
                            <div class="crc__title mb-30">
                                <h5 class="color-gray">Payment Method</h5> <span class="color"></span>
                            </div>
                            <div class="d-flex mb-20 align-items-center">
                                <div class="radio-theme-default custom-radio   me-2">
                                    <input class="radio" type="radio" name="radio-vertical2" value="0"
                                        id="radio-vl6" checked>
                                    <label for="radio-vl6">
                                        <span class="radio-text"></span>
                                    </label>
                                </div>
                                <span class="crc__method">
                                    @if ($order->payment_gate == 'Cash On Delivery')
                                        <span>Cash On Delivery</span>
                                    @else
                                        <img style="object-fit:cover ; height:30px"
                                            src="{{ asset('assets/img') }}/{{ $order->payment_gate == 'MOMO' ? 'MoMo Logo.webp' : 'vnpay-logo.jpg' }}"
                                            alt="img"> •••• •••• ••••
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="card-body bg-white bg-shadow radius-xl crc-table p-sm-30 p-15 ">
                            <div class="table-responsive">
                                <table id="cart" class="table table-borderless mb-0">
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($allDetail as $item)
                                            <tr>
                                                <td class="Product-cart-title">
                                                    <div class="media  align-items-center">
                                                        <img class="me-3 wh-80 align-self-center"
                                                            src="{{ $item->course->image }}" style="object-fit: cover"
                                                            alt="Generic
                                                            placeholder image">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">{{ $item->course->course_name }}</h5>
                                                            <div class="d-flex">
                                                                <p>Class:<span>{{ $item->class->class_name }}</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class=" subtotal">
                                                    {{ \App\Helpers\NumberHelper::formatNumber($item->price) }} VNĐ</td>
                                            </tr>
                                            @php
                                                $total += $item->price;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>
                                            </td>
                                            <td colspan="2" class="order-summery">
                                                <div class="total">
                                                    <div class="subtotalTotal">
                                                        Subtotal:
                                                        <span> {{ \App\Helpers\NumberHelper::formatNumber($total) }}
                                                            VNĐ</span>
                                                    </div>

                                                    <div class="shipping">
                                                        Voucher:
                                                        <span>{{ $order->voucher_code }} (-
                                                            {{ $order->voucher->discounts ?? 0 }}%

                                                            )</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="total-money d-flex justify-content-between align-items-center mt-1">
                                                    <h6>Total :</h6>
                                                    <h5 class="text-primary">
                                                        {{ \App\Helpers\NumberHelper::formatNumber($total - ($order->voucher->discounts ?? 0 * $total) / 100) }}
                                                        VNĐ
                                                    </h5>
                                                </div>

                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.update_status').each(function() {
            $(this).click(function() {
                let status = $(this).data('status');
                let order_id = $(this).data('order');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/orders/${order_id}') }}`,
                    type: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': csrf
                    },
                    data: {
                        status: status
                    },
                    success: function(response) {
                        console.log(response);
                        if (response) {
                            btnSuccess.click()
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            btnWarning.click()
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            })
        })
    </script>
@endpush
