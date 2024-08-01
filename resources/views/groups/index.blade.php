@extends('layout.main')
@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main user-member justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Groups</h4>
                            <span class="sub-title ms-sm-25 ps-sm-25"></span>
                        </div>

                        <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                            <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                            <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                                placeholder="Search by Name" aria-label="Search">
                        </form>

                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal" data-bs-target="#new-member">
                            <i class="las la-plus fs-16"></i>Create New Group</a>
                        <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content  radius-xl">
                                    <div class="modal-header">
                                        <h6 class="modal-title fw-500" id="staticBackdropLabel">Create group</h6>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="uil uil-times"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="new-member-modal">


                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">group name</label>
                                                    <input type="text" class="form-control name-group" id="name47"
                                                        placeholder="Enter group name here...">
                                                </div>
                                                <p class="text-danger validate-add-group"></p>
                                            </div>

                                            <div class="button-group d-flex pt-25">
                                                <button
                                                    class="btn btn-primary btn-default btn-squared text-capitalize add-group">Create
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
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            @foreach ($groups as $group)
                <div class="col-xxl-4 col-md-6 mb-25">
                    <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                        <div class="border-bottom">
                            <div class="media user-group-media d-flex justify-content-between">
                                <div class="media-body d-flex align-items-center">
                                    <img class="me-20 wh-70 rounded-circle bg-opacity-primary"
                                        src="{{ asset('assets/img/ugl1.png') }}" alt="author">
                                    <div>
                                        <a>
                                            <h6 class="mt-0  fw-500">{{ $group->group_name }}
                                                @if ($group->deleted_at)
                                                    <span class="dm-tag tag-danger tag-transparented">Deactivated</span>
                                                @else
                                                    <span class="dm-tag tag-success tag-transparented">Active</span>
                                                @endif
                                            </h6>

                                        </a>
                                    </div>
                                </div>
                                <div class="mt-n15">
                                    <div class="dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}"
                                                alt="more-horizontal" class="svg">
                                        </button>
                                        <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">

                                            <a href="#" class="dropdown-item edit-groups-{{ $group->id }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#edit_groups_{{ $group->group_name }}"
                                                data-id="{{ $group->id }}">
                                                edit</a>
                                            <a type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#modal-info-delete-group-{{ $group->id }}">Delete</a>

                                            <a class="dropdown-item"
                                                href="{{ route('admin.groups.show', $group->id) }}">authorization</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-group-people">

                                <ul class="d-flex flex-wrap mb-20 user-group-people__parent mt-15">
                                    <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary"
                                                src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary"
                                                src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary"
                                                src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary"
                                                src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary"
                                                src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary"
                                                src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary"
                                                src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary"
                                                src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-group-project">
                            <div class="d-flex justify-content-between user-group-progress-top">
                                <div>

                                </div>
                                <div>
                                    <span class="color-light fs-12">Members</span>
                                    <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Modal Edit --}}
                <div class="modal fade new-member" id="edit_groups_{{ $group->group_name }}" role="dialog"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                            <div class="modal-header">
                                <h6 class="modal-title fw-500" id="staticBackdropLabel">
                                    Edit Group - {{ $group->group_name }}</h6>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="uil uil-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="new-member-modal">


                                    <div class="mb-25">
                                        <div class="form-group mb-10">
                                            <label for="">Group name</label>
                                            <input type="text" class="form-control name-group-{{ $group->id }}"
                                                id="" value="{{ $group->group_name }}">
                                        </div>
                                        <p class="text-danger validate-group-{{ $group->id }}"></p>

                                    </div>
                                    <div class="form-group textarea-group">
                                        <label class="mb-15">status</label>
                                        <div class="d-flex">
                                            <div class="radio-horizontal-list d-flex">
                                                <div class="radio-theme-default custom-radio ">
                                                    <input class="radio radio-active" type="radio"
                                                        name="radio-optional-group-{{ $group->id }}" value="1"
                                                        id="radio-{{ $group->group_name }}-hl1"
                                                        {{ $group->deleted_at ? '' : 'checked' }}>
                                                    <label for="radio-{{ $group->group_name }}-hl1">
                                                        <span class="radio-text">Active</span>
                                                    </label>
                                                </div>
                                                <div class="radio-theme-default custom-radio ">
                                                    <input class="radio radio-deactivated" type="radio"
                                                        name="radio-optional-group-{{ $group->id }}" value="0"
                                                        id="radio-{{ $group->group_name }}-hl2"
                                                        {{ $group->deleted_at ? 'checked' : '' }}>
                                                    <label for="radio-{{ $group->group_name }}-hl2">
                                                        <span class="radio-text">Deactivated</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="button-group d-flex pt-25">
                                        <a class="btn btn-primary btn-default btn-squared text-capitalize update_group"
                                            data-id="{{ $group->id }}">Update
                                        </a>
                                        <a data-bs-dismiss="modal" aria-label="Close"
                                            class=" close btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">Cancel
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Modal Delete  --}}
                <div class="modal-info-delete modal fade show" id="modal-info-delete-group-{{ $group->id }}"
                    tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-info" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="modal-info-body d-flex">
                                    <div class="modal-info-icon warning">
                                        <img src="{{ asset('assets/img/svg/alert-circle.svg') }} " alt="alert-circle"
                                            class="svg">
                                    </div>

                                    <div class="modal-info-text">
                                        <h6>Do you Want to delete group {{ $group->group_name }}?</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                    data-bs-dismiss="modal">No</button>
                                <button type="button" class="btn btn-success btn-outlined btn-sm delete"
                                    data-bs-dismiss="modal" data-id="{{ $group->id }}">Yes</button>

                            </div>
                        </div>
                    </div>


                </div>
            @endforeach

        </div>
    @endsection
    @push('scripts')
        <script>
            $('.update_group').each(function() {
                $(this).click(function() {
                    let id = $(this).data('id');
                    let name = $('.name-group-' + id).val();
                    if (name == "") {
                        $('.validate-group-' + id).text("Please enter group name")
                    } else $('.validate-group-' + id).text("")
                    let deleted_at = $(`input[name="radio-optional-group-${id}"]:checked`).val();
                    let csrf = '{{ csrf_token() }}';
                    $.ajax({
                        url: `{{ URL::to('dashboard/groups/${id}') }}`,
                        type: 'PATCH',
                        data: {
                            group_name: name,
                            deleted_at: deleted_at,
                        },
                        headers: {
                            'X-CSRF-TOKEN': csrf
                        },
                        success: function(response) {
                            if (response) {
                                btnSuccess.click()
                                setTimeout(() => {
                                    location.reload();
                                }, 1000);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                })
            })

            $('.delete').each(function() {
                $(this).click(function() {
                    let id = $(this).data('id');
                    let csrf = '{{ csrf_token() }}';
                    $.ajax({
                        url: `{{ URL::to('dashboard/groups/${id}') }}`,
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

            $('.add-group').click(function() {
                let inputName = $(".name-group").val();
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/groups') }}`,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrf
                    },
                    data: {
                        group_name: inputName,
                    },
                    success: function(response) {

                        if (response) {
                            console.log(response);
                            if (!response.success) {
                                $(".validate-add-group").text(response.data.group_name[0])
                            } else {
                                $(".validate-add-group").text("")
                                btnSuccess.click()
                                setTimeout(() => {
                                    location.reload();
                                }, 1000);
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            })
        </script>
    @endpush
