@extends('layout.main')
@section('title')
    Users List
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main user-member justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Orders list</h4>
                            <span class="sub-title ms-sm-25 ps-sm-25"></span>
                        </div>

                        <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                            <img src="{{ asset('assets/img') }}/svg/search.svg" alt="search" class="svg">
                            <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                                placeholder="Search by Name" aria-label="Search">
                        </form>

                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">


                <div class="userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30">
                    <a class="btn btn-primary dropdown-toggle dm-select" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Export
                    </a>
                    <div id="filter-form-container" class="footable-filtering-external footable-filtering-right">
                        <form class="form-inline">
                            <div
                                class="form-group dm-select d-flex align-items-center adv-table-searchs__status my-xl-25 my-15 mb-0 me-sm-30 me-0">
                                <label class="d-flex align-items-center mb-sm-0 mb-2">Status</label><select
                                    class="form-control ms-sm-10 ms-0">
                                    <option>All</option>
                                    <option>Active</option>
                                    <option>deactivate</option>
                                    <option>Blocked</option>
                                </select>
                            </div>
                            <div
                                class="form-group dm-select d-flex align-items-center adv-table-searchs__position my-xl-25 my-15 me-sm-20 me-0 ">
                                <label class="d-flex align-items-center mb-sm-0 mb-2">position</label><select
                                    class="form-control ms-sm-10 ms-0">
                                    <option>All</option>
                                    <option>Web Developer</option>
                                    <option>Senior Manager</option>
                                    <option>UX/UI Desogner</option>
                                    <option>Content Writer</option>
                                    <option>Graphic Designer</option>
                                    <option>Marketer</option>
                                    <option>Project Manager</option>
                                    <option>UI Designer</option>
                                    <option>Business Development</option>
                                </select>
                            </div>
                            <div class="form-group footable-filtering-search"><label class="sr-only">Search</label>
                                <div class="input-group"><input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn"><button type="button" class="btn btn-primary"><span
                                                class="fooicon fooicon-search"></span></button><button type="button"
                                            class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a class="checkbox"><label><input type="checkbox" checked="checked">
                                                        <span class="userDatatable-title">id</span>
                                                    </label></a></li>
                                            <li><a class="checkbox"><label><input type="checkbox" checked="checked">
                                                        <span class="userDatatable-title">user</span>
                                                    </label></a></li>
                                            <li><a class="checkbox"><label><input type="checkbox" checked="checked">
                                                        <span class="userDatatable-title">emaill</span>
                                                    </label></a></li>
                                            <li><a class="checkbox"><label><input type="checkbox" checked="checked">
                                                        <span class="userDatatable-title">company</span>
                                                    </label></a></li>
                                            <li><a class="checkbox"><label><input type="checkbox" checked="checked">
                                                        <span class="userDatatable-title">position</span>
                                                    </label></a></li>
                                            <li><a class="checkbox"><label><input type="checkbox" checked="checked">
                                                        <span class="userDatatable-title">join date</span>
                                                    </label></a></li>
                                            <li><a class="checkbox"><label><input type="checkbox" checked="checked">
                                                        <span class="userDatatable-title">status</span>
                                                    </label></a></li>
                                            <li><a class="checkbox"><label><input type="checkbox" checked="checked">
                                                        <span class="userDatatable-title float-end">action</span>
                                                    </label></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <div class="d-flex align-items-center">
                                            <div class="custom-checkbox  check-all">
                                                <input class="checkbox" type="checkbox" id="check-44" data-id='0'>
                                                <label for="check-44">
                                                    <span class="checkbox-text userDatatable-title"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">ID</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">User</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Voucher Code</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Total</span>
                                    </th>


                                    <th>
                                        <span class="userDatatable-title">Payment Gate</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Delivery</span>
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
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div
                                                                class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox checking" type="checkbox"
                                                                    data-id=""
                                                                    id="check-grp-content-{{ $order->id }}">
                                                                <label for="check-grp-content-{{ $order->id }}"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $order->id }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $order->user->name }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $order->voucher_code }}
                                            </div>
                                        </td>

                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $order->total }}
                                            </div>
                                        </td>

                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $order->payment_gate }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $order->delivery->delivery_name }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                @if (1)
                                                    <span
                                                        class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">deactivete</span>
                                                @else
                                                    <span
                                                        class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="{{ route('admin.orders.show', $order->id) }}" class="edit">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove" type="button" class="view"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-info-forceDelete-{{ $order->id }}">
                                                        <i class="uil uil-trash-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>


                                    {{-- MODAL FORCE DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-forceDelete-{{ $order->id }}" tabindex="-1" role="dialog"
                                        aria-hidden="true">


                                        <div class="modal-dialog modal-sm modal-info" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="modal-info-body d-flex">
                                                        <div class="modal-info-icon warning">
                                                            <img src="{{ asset('assets/img') }}/svg/alert-circle.svg"
                                                                alt="alert-circle" class="svg">
                                                        </div>

                                                        <div class="modal-info-text">
                                                            <h6>Do you Want to delete permanent order #{{ $order->id }}?
                                                            </h6>
                                                            <p>"Warning: You cannot undo your saved changes."

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm forceDelete-order"
                                                        data-id="{{ $order->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination-container d-flex justify-content-between pt-25">

                        {{ $orders->links('pagination::bootstrap-5') }}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        $('.forceDelete-order').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/orders/forceDelete/${id}') }}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrf
                    },
                    success: function(response) {
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
