@extends('layout.main')
@section('title')
    Classes
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main user-member justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">All Classes</h4>
                            <span class="sub-title ms-sm-25 ps-sm-25"></span>
                        </div>

                        <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                            <img src="{{ asset('assets/img') }}/svg/search.svg" alt="search" class="svg">
                            <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                                placeholder="Search by Name" aria-label="Search">
                        </form>

                    </div>
                    <div class="action-btn">
                        <a href="{{ route('admin.classes.create') }}" class="btn px-15 btn-primary">
                            <i class="las la-plus fs-16"></i>Create class</a>


                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <div class="d-flex align-items-center">
                                            <div class="custom-checkbox  check-all">
                                                <input class="checkbox" type="checkbox" id="check-44" data-id='0'>
                                                <label for="check-44">
                                                    <span class="checkbox-text userDatatable-title">Class name</span>
                                                </label>
                                            </div>
                                        </div>
                                    </th>


                                    <th>
                                        <span class="userDatatable-title">Date Start</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Time Study</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Schedule</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title float-end">action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $class)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div
                                                                class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox checking" type="checkbox"
                                                                    data-id="{{$class->id}}" id="check-grp-content-{{$class->id}}">
                                                                <label for="check-grp-content-{{$class->id}}"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-38"
                                                        style="background-image:url({{ $class->course->image }}); background-size: cover;"></a>
                                                </div>
                                                <div class="userDatatable-inline-title">
                                                    <a href="{{ route('admin.classes.show', $class->id) }}"
                                                        class="text-dark fw-500">
                                                        <h6>{{ $class->class_name }}</h6>
                                                    </a>
                                                    <a href="{{ route('admin.users.show', $class->user->id) }}"
                                                        class="d-block mb-0">
                                                        {{ $class->user->name }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $class->date_start }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $class->time_study }}
                                            </div>
                                        </td>

                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                @if ($class->deleted_at)
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
                                                    @if (!$class->deleted_at)
                                                        <a type="button" class="view" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info-delete-{{ $class->id }}">
                                                            <i class="uil uil-eye-slash"></i>

                                                        </a>
                                                    @else
                                                        <a type="button" class="view" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info-restore-{{ $class->id }}">
                                                            <i class="uil uil-eye"></i>
                                                        </a>
                                                    @endif
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.classes.edit', $class->id) }}" class="edit">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.classes.show', $class->id) }}" class="edit">
                                                        <i class="uil uil-ellipsis-h"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove" type="button" class="view"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-info-forceDelete-{{ $class->id }}">
                                                        <i class="uil uil-trash-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    {{-- MODAL SOFT DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-delete-{{ $class->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to deactivated {{ $class->class_name }}?</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm delete-class"
                                                        data-id="{{ $class->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- MODAL RESTORE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-restore-{{ $class->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to active {{ $class->class_name }}?</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm restore-class"
                                                        data-id="{{ $class->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- MODAL FORCE DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-forceDelete-{{ $class->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to delete permanent {{ $class->class_name }}?
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
                                                        class="btn btn-success btn-outlined btn-sm forceDelete-class"
                                                        data-id="{{ $class->id }}"
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
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete-array">
                            <i class="las la-trash fs-16"></i>Delete selected classes</a>
                        {{ $classes->links('pagination::bootstrap-5') }}
                    </div>
                    <div class="modal-info-delete modal fade show" id="delete-array" tabindex="-1" role="dialog"
                        aria-hidden="true">


                        <div class="modal-dialog modal-sm modal-info" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="modal-info-body d-flex">
                                        <div class="modal-info-icon warning">
                                            <img src="{{ asset('assets/img') }}/svg/alert-circle.svg" alt="alert-circle"
                                                class="svg">
                                        </div>

                                        <div class="modal-info-text">
                                            <h6>Do you Want to delete all classes selected ?</h6>
                                            <p>"Warning: You cannot undo your saved changes."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                        data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-success btn-outlined btn-sm delete-array-class"
                                        data-bs-dismiss="modal" >Yes</button>
                                </div>
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
        $('.delete-class').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                console.log(id);
                $.ajax({
                    url: `{{ URL::to('dashboard/classes/${id}') }}`,
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


        $('.restore-class').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/classes/restore/${id}') }}`,
                    type: 'GET',
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

        $('.forceDelete-class').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/classes/forceDelete/${id}') }}`,
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


        $('.delete-array-class').click(function() {
            let csrf = '{{ csrf_token() }}';
            let listCheckbox = document.querySelectorAll('.checking');
            let checkeds = [];
            listCheckbox.forEach(item => {
                if (item.checked) checkeds.push(item.dataset.id)
            });
            if (checkeds.length == 0) {
                btnWarning.click();
                return;
            }

            $.ajax({
                url: `{{ URL::to('dashboard/classes/forceDelete/${1}') }}`,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: {
                    list: checkeds
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
    </script>
@endpush
