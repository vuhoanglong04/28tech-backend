@extends('layout.main')
@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="breadcrumb-main user-member justify-content-sm-between ">
                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                    <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                        <h4 class="text-capitalize fw-500 breadcrumb-title">vouchers list</h4>
                        <span class="sub-title ms-sm-25 ps-sm-25"></span>
                    </div>

                    <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="svg replaced-svg">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                            placeholder="Search by Name" aria-label="Search">
                    </form>

                </div>
                <div class="action-btn">
                    <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal" data-bs-target="#new-member">
                        <i class="las la-plus fs-16"></i>Create voucher</a>

                    <!-- Modal -->
                    <div class="modal fade new-member " id="new-member" role="dialog" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content  radius-xl">
                                <div class="modal-header">
                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Create voucher</h6>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="svg replaced-svg">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="new-member-modal">

                                        <div class="mb-25">
                                            <div class="form-group mb-10">
                                                <label for="name47">Code</label>
                                                <input type="text" class="form-control code" id="name47"
                                                    placeholder="ABCXYZ" name="code" maxlength="10">
                                            </div>
                                            <p class="text-danger validate-code"></p>

                                        </div>

                                        <div class="mb-25 form-group quantity-appearance">
                                            <label>Discount</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text h-100" id="basic-addon2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="svg replaced-svg">
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
                                                    <input type="number" class="form-control discounts" min="0"
                                                        step="1" max="100" value="0" name="discounts"
                                                        data-inc="1">
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
                                            <p class="text-danger validate-discounts"></p>

                                        </div>


                                        <div class="form-group mb-20">
                                            <label for="name1">Date Start</label>
                                            <input type="date" class="form-control start" id="name1"
                                                name="date_start" value="">
                                            <p class="text-danger validate-start"></p>

                                        </div>

                                        <div class="form-group mb-20">
                                            <label for="name1">Date Expired</label>
                                            <input type="date" class="form-control expire" id="name1"
                                                placeholder="..." name="date_expire" value="">
                                            <p class="text-danger validate-expire"></p>

                                        </div>
                                        <div class="button-group d-flex pt-25">
                                            <button
                                                class="btn btn-primary btn-default btn-squared text-capitalize add-voucher">add
                                                new voucher
                                            </button>
                                            <button type="button"
                                                class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light"
                                                data-bs-dismiss="modal">cancel</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->

                </div>
            </div>
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header color-dark fw-500">
                     
                    </div>
                    <div class="card-body">
                        <div class="userDatatable global-shadow border-light-0 w-100">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <div class="d-flex align-items-center">
                                                    <div class="custom-checkbox  check-all">
                                                        <input class="checkbox" type="checkbox" id="check-45">
                                                        <label for="check-45">
                                                            <span class="checkbox-text userDatatable-title"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Code</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Discounts(%)</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Date Start</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Date Expired</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Status</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-end">action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vouchers as $voucher)
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                            <div class="checkbox-group-wrapper">
                                                                <div class="checkbox-group d-flex">
                                                                    <div
                                                                        class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                        <input class="checkbox" type="checkbox"
                                                                            id="check-grp-{{ $voucher->code }}">
                                                                        <label for="check-grp-{{ $voucher->code }}"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $voucher->code }}
                                                    </div>
                                                </td>
                                                <td class="tex-center">
                                                    <div class="userDatatable-content">
                                                        {{ $voucher->discounts }}%
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $voucher->date_start }}
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $voucher->date_expire }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        @php
                                                            $expiryDate = \Carbon\Carbon::parse($voucher->date_expire); // Giả sử $product là đối tượng chứa ngày hết hạn
                                                            $today = \Carbon\Carbon::now();
                                                        @endphp


                                                        @if ($today->lessThan($expiryDate))
                                                            <span
                                                                class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                                        @else
                                                            <span
                                                                class="bg-opacity-danger rounded-pill  color-danger userDatatable-content-status active">deactivated</span>
                                                        @endif
                                                    </div>

                                                </td>
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                                        <li>
                                                            <a href="{{route('admin.vouchers.edit' , $voucher->code)}}" class="edit">
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="remove" data-bs-toggle="modal"
                                                                data-bs-target="#modal-forceDelete-{{ $voucher->code }}">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            {{-- MODAL FORCE DELETE --}}
                                            <div class="modal-delete modal fade"
                                                id="modal-forceDelete-{{ $voucher->code }}" tabindex="-1" role="dialog"
                                                aria-hidden="false">


                                                <div class="modal-dialog modal-sm modal-info" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="modal-info-body d-flex">
                                                                <div class="modal-info-icon warning">
                                                                    <img src="{{ asset('assets/img') }}/svg/alert-circle.svg"
                                                                        alt="alert-circle" class="svg">
                                                                </div>

                                                                <div class="modal-info-text">
                                                                    <h6>Do you Want to delete permanent
                                                                        {{ $voucher->code }}?
                                                                    </h6>
                                                                    <p>"Warning: You cannot undo your saved changes."
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-danger btn-outlined btn-sm"
                                                                data-bs-dismiss="modal">No</button>
                                                            <button type="button"
                                                                class="btn btn-success btn-outlined btn-sm forceDelete-voucher"
                                                                data-code="{{ $voucher->code }}"
                                                                data-bs-dismiss="modal">Yes</button>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        @endforeach
                                    </tbody>
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
        document.querySelector('.discounts').addEventListener('input', function() {
            if (this.value > 100) this.value = 100
            if (this.value < 0) this.value = 0

        })
        document.querySelector('.code').addEventListener('input', function() {
            this.value = this.value.toUpperCase()
        })
        $(".add-voucher").click(function() {
            document.body.classList.remove('loaded')

            //inputs
            let csrf = '{{ csrf_token() }}';
            let code = $('.code').val();
            let discounts = $('.discounts').val();
            let date_start = $('.start').val();
            let date_expire = $(".expire").val();
            ///validate
            let validateCode = $(".validate-code")
            let validateDiscounts = $(".validate-discounts")
            let validateDateStart = $(".validate-start")
            let validateDateExpire = $(".validate-expire")
            //data

            $.ajax({
                url: `{{ URL::to('dashboard/vouchers') }}`,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: {
                    code: code,
                    discounts: discounts,
                    date_start: date_start,
                    date_expire: date_expire
                },
                success: function(response) {
                    document.body.classList.add('loaded')
                    console.log(response);
                    if (response) {
                        if (response.success) {
                            btnSuccess.click()
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            console.log(response);
                            btnWarning.click()
                            if (response.data) {
                                validateCode.text(response?.data?.code?.[0] ?? '');
                                validateDiscounts.text(response?.data?.discounts?.[0] ?? '');
                                validateDateStart.text(response?.data?.date_start?.[0] ?? '');
                                validateDateExpire.text(response?.data?.date_expire?.[0] ?? '');
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        })

        $('.forceDelete-voucher').each(function() {
            $(this).click(function() {
                let code = $(this).data('code');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/vouchers/${code}') }}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrf
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
