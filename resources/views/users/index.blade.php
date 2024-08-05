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
                            <h4 class="text-capitalize fw-500 breadcrumb-title">users list</h4>
                            <span class="sub-title ms-sm-25 ps-sm-25"></span>
                        </div>

                        <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                            <img src="{{ asset('assets/img') }}/svg/search.svg" alt="search" class="svg">
                            <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                                placeholder="Search by Name" aria-label="Search">
                        </form>

                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal" data-bs-target="#new-member">
                            <i class="las la-plus fs-16"></i>Create user</a>

                        <!-- Modal -->
                        <div class="modal fade new-member " id="new-member" role="dialog" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content  radius-xl">
                                    <div class="modal-header">
                                        <h6 class="modal-title fw-500" id="staticBackdropLabel">Create user</h6>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <img src="{{ asset('assets/img') }}/svg/x.svg" alt="x" class="svg">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="new-member-modal">

                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">Full name</label>
                                                    <input type="text" class="form-control name" id="name47"
                                                        placeholder="Vu Hoang Long...">
                                                </div>
                                                <p class="text-danger validate-add-name-user"></p>

                                            </div>

                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">Email</label>
                                                    <input type="text" class="form-control email" id="name47"
                                                        placeholder="longvuhoang@gmail.com">
                                                </div>
                                                <p class="text-danger validate-add-email-user"></p>

                                            </div>

                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">Phone number</label>
                                                    <input type="text" class="form-control phone_number" id="name47"
                                                        placeholder="+84">
                                                </div>
                                                <p class="text-danger validate-add-phone-user"></p>

                                            </div>
                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">Password</label>
                                                    <input type="password" class="form-control password" id="name47"
                                                        placeholder="">
                                                </div>
                                                <p class="text-danger validate-add-password-user"></p>

                                            </div>
                                            <div class="form-group mb-20">
                                                <label for="name47">Group</label>

                                                <div class="category-member">
                                                    <select class="js-example-basic-single js-states form-control group_id"
                                                        id="category-member">
                                                        @foreach ($groups as $group)
                                                            @if (!$group->deleted_at)
                                                                <option value="{{ $group->id }}"
                                                                    {{ $group->id == 1 ? 'selected' : '' }}>
                                                                    {{ $group->group_name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <p class="text-danger validate-add-group-user"></p>

                                            </div>
                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">Image</label>
                                                    <div class="dm-tag-wrap">

                                                        <div class="dm-upload">
                                                            <div class="dm-upload__button">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-lg btn-outline-lighten btn-upload"
                                                                    onclick="$('#upload-1').click()"> <img class="svg"
                                                                        src="{{ asset('assets/img/') }}/svg/upload.svg"
                                                                        alt="upload"> Click to Upload</a>
                                                                <input type="file" name="upload-1"
                                                                    class="upload-one image" id="upload-1">
                                                            </div>
                                                            <div class="dm-upload__file">
                                                                <ul>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p class="text-danger validate-add-image-user"></p>

                                            </div>


                                            <div class="button-group d-flex pt-25">
                                                <button
                                                    class="btn btn-primary btn-default btn-squared text-capitalize add-user">add
                                                    new user
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
                                                    <span class="checkbox-text userDatatable-title">user</span>
                                                </label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">emaill</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">phone number</span>
                                    </th>


                                    <th>
                                        <span class="userDatatable-title">status</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title float-end">action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div
                                                                class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox checking" type="checkbox"
                                                                    data-id="{{ $user->id }}"
                                                                    id="check-grp-content-{{ $user->id }}">
                                                                <label for="check-grp-content-{{ $user->id }}"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#"
                                                        class="profile-image rounded-circle d-block m-0 wh-38"
                                                        style="background-image:url({{ $user->image }}); background-size: cover;"></a>
                                                </div>
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>{{ $user->name }}</h6>
                                                    </a>
                                                    <p class="d-block mb-0">
                                                        {{ $user->group->group_name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $user->email }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $user->phone_number }}
                                            </div>
                                        </td>

                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                @if ($user->deleted_at)
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
                                                    @if (!$user->deleted_at)
                                                        @can('users.delete')
                                                            <a type="button" class="view" data-bs-toggle="modal"
                                                                data-bs-target="#modal-info-delete-{{ $user->id }}">
                                                                <i class="uil uil-eye-slash"></i>

                                                            </a>
                                                        @endcan
                                                    @else
                                                        @can('users.restore')
                                                            <a type="button" class="view" data-bs-toggle="modal"
                                                                data-bs-target="#modal-info-restore-{{ $user->id }}">
                                                                <i class="uil uil-eye"></i>
                                                            </a>
                                                        @endcan
                                                    @endif
                                                </li>
                                                @can('users.update')
                                                    <li>
                                                        <a href="{{ route('admin.users.show', $user->id) }}" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('users.forceDelete')
                                                    <li>
                                                        <a href="#" class="remove" type="button" class="view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-info-forceDelete-{{ $user->id }}">
                                                            <i class="uil uil-trash-alt"></i>
                                                        </a>
                                                    </li>
                                                @endcan

                                            </ul>
                                        </td>
                                    </tr>

                                    {{-- MODAL SOFT DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-delete-{{ $user->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to deactivated {{ $user->name }}?</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm delete-user"
                                                        data-id="{{ $user->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- MODAL RESTORE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-restore-{{ $user->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to active {{ $user->name }}?</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm restore-user"
                                                        data-id="{{ $user->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- MODAL FORCE DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-forceDelete-{{ $user->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to delete permanent {{ $user->name }}?</h6>
                                                            <p>"Warning: You cannot undo your saved changes."

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm forceDelete-user"
                                                        data-id="{{ $user->id }}"
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
                            <i class="las la-trash fs-16"></i>Delete selected user</a>
                        {{ $users->links('pagination::bootstrap-5') }}
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
                                            <h6>Do you Want to delete all user selected ?</h6>
                                            <p>"Warning: You cannot undo your saved changes."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                        data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-success btn-outlined btn-sm delete-array-user"
                                        data-bs-dismiss="modal">Yes</button>
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
        function deleteFile(e) {
            var inputImage = document.querySelector('.image')
            e.parentElement.remove();
            inputImage.value = "";
        }
        $('.delete-user').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/users/${id}') }}`,
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

        $('.restore-user').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/users/restore/${id}') }}`,
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

        $(".add-user").click(function() {
            document.body.classList.remove('loaded')

            //inputs
            let csrf = '{{ csrf_token() }}';
            let name = $('.name').val();
            let email = $('.email').val();
            let password = $('.password').val();
            let group_id = $(".group_id").val();
            let phone_number = $(".phone_number").val();
            let image = $(".image")[0].files[0];
            ///validate
            let validateName = $(".validate-add-name-user")
            let validateEmail = $(".validate-add-email-user")
            let validatePhone = $(".validate-add-phone-user")
            let validatePassword = $(".validate-add-password-user")
            let validateGroup = $(".validate-add-group-user")
            let validateImage = $(".validate-add-image-user")

            //data
            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('password', password);
            formData.append('group_id', group_id);
            formData.append('phone_number', phone_number);
            if (image != undefined) {
                formData.append('image', image);
            }

            $.ajax({
                url: `{{ URL::to('dashboard/users') }}`,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: formData,
                processData: false, // Không xử lý dữ liệu
                contentType: false, // Không thiết lập content-type
                success: function(response) {
                    if (response) {
                        document.body.classList.add('loaded')
                        if (response.success) {

                            btnSuccess.click()
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            console.log(response);
                            btnWarning.click()
                            if (response.data) {

                                validateEmail.text(response?.data?.email?.[0] ?? '');
                                validateName.text(response?.data?.name?.[0] ?? '');
                                validatePhone.text(response?.data?.phone_number?.[0] ?? '');
                                validateGroup.text(response?.data?.group_id?.[0] ?? '');
                                validatePassword.text(response?.data?.password?.[0] ?? '');
                                validateImage.text(response?.data?.image?.[0] ?? '');

                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        })

        $('.forceDelete-user').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/users/forceDelete/${id}') }}`,
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

        $('.delete-array-user').click(function() {
            let id = $(this).data('id');
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
                url: `{{ URL::to('dashboard/users/forceDelete/${id}') }}`,
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
