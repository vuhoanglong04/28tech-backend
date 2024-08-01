@extends('layout.main')
@section('content')
    <div class="container-fluid" data-select2-id="22">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title"></h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i
                                            class="uil uil-estate"></i>Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.classes.index') }}">Classes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $class->class_name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-select2-id="21">


            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header color-dark fw-500">
                        <h6>Class Detail</h6>
                    </div>
                    <div class="card-body">
                        <div class="list-box col-4 mb-20">
                            <ul>
                                <li class="list-box__item"><strong>Class Name : </strong>{{ $class->class_name }}</li>
                                <li class="list-box__item"><strong>Course : </strong>{{ $class->course->course_name }}</li>
                                <li class="list-box__item"><strong>Lecturer : </strong>{{ $class->user->name }}</li>
                                <li class="list-box__item"><strong>Date Start : </strong>{{ $class->date_start }}</li>
                                <li class="list-box__item"><strong>Time Study : </strong>{{ $class->time_study }}</li>
                                <li class="list-box__item"><strong>Schedule : </strong>{{ $class->schedule }}</li>
                                <li class="list-box__item"><strong>Members : </strong> {{ count($userInClass) }}</li>
                            </ul>
                        </div>
                        <a href="#" class="btn px-15 btn-primary my-3" data-bs-toggle="modal"
                            data-bs-target="#new-member">
                            <i class="las la-plus fs-16"></i>Add Member</a>

                        <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-modal="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content  radius-xl">
                                    <div class="modal-header">
                                        <h6 class="modal-title fw-500" id="staticBackdropLabel"></h6>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="uil uil-times"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="new-member-modal">
                                            <div class="form-group">
                                                <label for="name47">User</label>

                                                <div class="category-member">
                                                    <select
                                                        class="js-example-basic-single js-states form-control user_id select2-hidden-accessible"
                                                        id="category-member" name="user_Id">
                                                        @foreach ($listUser as $user)
                                                            @if (!$user->deleted_at && !$userInClass->pluck('user_id')->contains($user->id))
                                                                <option value="{{ $user->id }}">{{ $user->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="button-group d-flex pt-25">
                                                <button data-id="{{ $class->id }}"
                                                    class="btn btn-primary btn-default btn-squared text-capitalize add-member">Add
                                                </button>
                                                <button data-bs-dismiss="modal" aria-label="Close"
                                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                            <span class="checkbox-text userDatatable-title">user</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </th>

                                            <th>
                                                <span class="userDatatable-title">join date</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-end">action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($userInClass as $user)
                                            @if (!$user->deleted_at)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div
                                                                            class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox checking" type="checkbox"
                                                                                data-id="{{ $user->id }}"
                                                                                id="check-grp-content-{{ $user->id }}">
                                                                            <label
                                                                                for="check-grp-content-{{ $user->id }}"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="profile-image rounded-circle d-block m-0 wh-38"
                                                                    style="background-image:url({{ $user->user->image ?? '' }}); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="{{ route('admin.users.show', $user->user->id ?? '') }}"
                                                                    class="text-dark fw-500">
                                                                    <h6>{{ $user->user->name ?? 'DELETED ACCOUNT' }}</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    {{ $user->user->group->group_name ?? '' }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ isset($user->user->id) ? $user->created_at : '' }}
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                                            <li>
                                                                <a href="#" class="remove" data-bs-toggle="modal"
                                                                    data-bs-target="#modal-forceDelete-{{ $user->id }}">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <div class="modal-info-delete modal fade"
                                                    id="modal-forceDelete-{{ $user->id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="false">


                                                    <div class="modal-dialog modal-sm modal-info" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="modal-info-body d-flex">
                                                                    <div class="modal-info-icon warning">
                                                                        <img src="{{ asset('assets/img') }}/svg/alert-circle.svg"
                                                                            alt="alert-circle" class="svg">
                                                                    </div>

                                                                    <div class="modal-info-text">
                                                                        <h6>Do you Want to delete this user out of class?
                                                                        </h6>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-danger btn-outlined btn-sm"
                                                                    data-bs-dismiss="modal">No</button>
                                                                <button type="button"
                                                                    class="btn btn-success btn-outlined btn-sm delete-user"
                                                                    data-class="{{ $class->id }}"
                                                                    data-id="{{ $user->id }}"
                                                                    data-bs-dismiss="modal">Yes</button>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            @endif
                                        @endforeach


                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-primary my-3" data-bs-toggle="modal"
                                    data-bs-target="#delete-array">
                                    <i class="las la-trash fs-16"></i>Delete selected user</a>
                                <div class="modal-info-delete modal fade show" id="delete-array" tabindex="-1"
                                    role="dialog" aria-hidden="true">


                                    <div class="modal-dialog modal-sm modal-info" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="modal-info-body d-flex">
                                                    <div class="modal-info-icon warning">
                                                        <img src="{{ asset('assets/img') }}/svg/alert-circle.svg"
                                                            alt="alert-circle" class="svg">
                                                    </div>

                                                    <div class="modal-info-text">
                                                        <h6>Do you Want to delete all user selected out of this class?</h6>
                                                        <p>"Warning: You cannot undo your saved changes."
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                    data-bs-dismiss="modal">No</button>
                                                <button type="button"
                                                    class="btn btn-success btn-outlined btn-sm delete-array-user"
                                                    data-class="{{ $class->id }}" data-bs-dismiss="modal">Yes</button>
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
    </div>
@endsection

@push('scripts')
    <script>
        $(".add-member").click(function() {
            let id_class = $(this).data("id")
            let user_id = $('.user_id').val();

            let csrf = '{{ csrf_token() }}';
            $(this).attr('disabled', true); // Correct way to add 'disabled' attribute

            $.ajax({
                url: `{{ URL::to('dashboard/classes/${id_class}') }}`,
                type: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: {
                    user_id: user_id
                },
                success: function(response) {

                    location.reload();
                    // document.body.classList.add('loaded')

                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        })

        $('.delete-user').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let id_class = $(this).data('class')
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/classes/${id_class}') }}`,
                    type: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': csrf
                    },
                    data: {
                        id_user_class: id
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

        $('.delete-array-user').click(function() {
            let id_class = $(this).data('class');
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
                url: `{{ URL::to('dashboard/classes/${id_class}') }}`,
                type: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: {
                    list: checkeds
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
    </script>
@endpush
