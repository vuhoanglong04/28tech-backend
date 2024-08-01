@extends('layout.main')
@section('title')
    Banners
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main user-member justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">All Banners</h4>
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
                            <i class="las la-plus fs-16"></i>Create banner</a>

                        <!-- Modal -->
                        <div class="modal fade new-member " id="new-member" role="dialog" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content  radius-xl">
                                    <div class="modal-header">
                                        <h6 class="modal-title fw-500" id="staticBackdropLabel">Create category</h6>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <img src="{{ asset('assets/img') }}/svg/x.svg" alt="x" class="svg">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="new-member-modal">

                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">Banner Upload</label>
                                                    <div class="dm-tag-wrap">

                                                        <div class="dm-upload">
                                                            <div class="dm-upload__button">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-lg btn-outline-lighten btn-upload"
                                                                    onclick="$('#upload-1').click()"> <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="svg replaced-svg">
                                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                        </path>
                                                                        <polyline points="17 8 12 3 7 8"></polyline>
                                                                        <line x1="12" y1="3" x2="12"
                                                                            y2="15"></line>
                                                                    </svg> Click to Upload</a>
                                                                <input type="file" name="upload-1"
                                                                    class="upload-one banner" id="upload-1">
                                                            </div>
                                                            <div class="dm-upload__file">
                                                                <ul>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p class="text-danger validate-banner"></p>

                                            </div>

                                            <div class="form-group mb-10">
                                                <label for="name47">Href</label>
                                                <input type="text" class="form-control href" id="name47"
                                                    placeholder="https://chatgpt.com/">
                                                <p class="text-danger validate-href"></p>

                                            </div>

                                            <div class="button-group d-flex pt-25">
                                                <button data-id="0"
                                                    class="btn btn-primary btn-default btn-squared text-capitalize add-banner">add
                                                    new banner
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
                                                    <span class="checkbox-text userDatatable-title">Banner</span>
                                                </label>
                                            </div>
                                        </div>
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
                                @foreach ($banners as $banner)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div
                                                                class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox checking" type="checkbox"
                                                                    data-id="" id="check-grp-content-">
                                                                <label for="check-grp-content-"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="profile-image d-block m-0 wh-100 "
                                                        style="background-image:url({{ $banner->banner_url }}); background-size: cover;"></a>
                                                </div>

                                            </div>
                                        </td>


                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                @if ($banner->deleted_at)
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
                                                    @if (!$banner->deleted_at)
                                                        <a type="button" class="view" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info-delete-{{ $banner->id }}">
                                                            <i class="uil uil-eye-slash"></i>

                                                        </a>
                                                    @else
                                                        <a type="button" class="view" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info-restore-{{ $banner->id }}">
                                                            <i class="uil uil-eye"></i>
                                                        </a>
                                                    @endif
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.banners.edit', $banner->id) }}"
                                                        class="view" class="edit">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove" type="button" class="view"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-info-forceDelete-{{ $banner->id }}">
                                                        <i class="uil uil-trash-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    {{-- MODAL SOFT DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-delete-{{ $banner->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to deactivated this banner?</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm delete-banner"
                                                        data-id="{{ $banner->id }}" data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- MODAL RESTORE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-restore-{{ $banner->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to active this banner ?</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm restore-banner"
                                                        data-id="{{ $banner->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- MODAL FORCE DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-forceDelete-{{ $banner->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to delete permanent this banner?
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
                                                        class="btn btn-success btn-outlined btn-sm forceDelete-banner"
                                                        data-id="{{ $banner->id }}"
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
@endsection

@push('scripts')
    <script>
        function deleteFile(e) {
            var inputImage = document.querySelector('.image')
            e.parentElement.remove();
            inputImage.value = "";
        }


        $(".add-banner").click(function() {
            document.body.classList.remove('loaded')

            //inputs
            let csrf = '{{ csrf_token() }}';
            let image = $(".banner")[0].files[0];
            let href = $('.href').val();
            ///validate
            let validateBanner = $(".validate-banner")
            let validateHref = $(".validate-href")
            //data
            let formData = new FormData();
            formData.append('banner_url', image)
            formData.append('href', href)
            $.ajax({
                url: `{{ URL::to('dashboard/banners') }}`,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: formData,
                processData: false, // Không xử lý dữ liệu
                contentType: false, // Không thiết lập content-type
                success: function(response) {
                    document.body.classList.add('loaded')
                    console.log(response);

                    if (response.success) {

                        btnSuccess.click()
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    } else {
                        console.log(response);
                        btnWarning.click()
                        if (response.data) {

                            validateBanner.text(response?.data?.banner_url?.[0] ?? '');
                            validateHref.text(response?.data?.href?.[0] ?? '');

                        }
                    }

                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        })

        $('.delete-banner').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/banners/${id}') }}`,
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
        $('.restore-banner').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/banners/restore/${id}') }}`,
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
        $('.forceDelete-banner').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/banners/forceDelete/${id}') }}`,
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
