@extends('layout.main')
@section('title')
    Categories List
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main user-member justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">categories list</h4>
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
                            <i class="las la-plus fs-16"></i>Create category</a>

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
                                                    <label for="name47">Category Name</label>
                                                    <input type="text"
                                                        class="form-control category-name-add category_name" id="name47"
                                                        placeholder="" data-id="0">
                                                </div>
                                                <p class="text-danger validate-add-name-category"></p>
                                            </div>

                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">Slug</label>
                                                    <input type="text" class="form-control slug slug_0" id="name47"
                                                        disabled>
                                                </div>
                                                <p class="text-danger validate-add-slug-category"></p>

                                            </div>




                                            <div class="button-group d-flex pt-25">
                                                <button data-id="0"
                                                    class="btn btn-primary btn-default btn-squared text-capitalize add-category">add
                                                    new category
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
                                                    <span class="checkbox-text userDatatable-title"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">category name</span>
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
                                @foreach ($categories as $cate)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div
                                                                class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox checking" type="checkbox"
                                                                    data-id="{{ $cate->id }}"
                                                                    id="check-grp-content-{{ $cate->id }}">
                                                                <label for="check-grp-content-{{ $cate->id }}"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-38"
                                                        style="background-image:url({{ $cate->image }}); background-size: cover;"></a>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{ $cate->category_name }}
                                            </div>
                                        </td>


                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                @if ($cate->deleted_at)
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
                                                    @if (!$cate->deleted_at)
                                                        <a type="button" class="view" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info-delete-{{ $cate->id }}">
                                                            <i class="uil uil-eye-slash"></i>

                                                        </a>
                                                    @else
                                                        <a type="button" class="view" data-bs-toggle="modal"
                                                            data-bs-target="#modal-info-restore-{{ $cate->id }}">
                                                            <i class="uil uil-eye"></i>
                                                        </a>
                                                    @endif
                                                </li>
                                                <li>
                                                    <a type="button" class="view" data-bs-toggle="modal"
                                                        data-bs-target="#modal-info-edit-{{ $cate->id }}"
                                                        class="edit">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove" type="button" class="view"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-info-forceDelete-{{ $cate->id }}">
                                                        <i class="uil uil-trash-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    {{-- MODAL SOFT DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-delete-{{ $cate->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to deactivated {{ $cate->category_name }}?</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm delete-category"
                                                        data-id="{{ $cate->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- MODAL RESTORE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-restore-{{ $cate->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to active {{ $cate->category_name }}?</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-outlined btn-sm restore-category"
                                                        data-id="{{ $cate->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- MODAL FORCE DELETE --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-forceDelete-{{ $cate->id }}" tabindex="-1" role="dialog"
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
                                                            <h6>Do you Want to delete permanent {{ $cate->category_name }}?
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
                                                        class="btn btn-success btn-outlined btn-sm forceDelete-category"
                                                        data-id="{{ $cate->id }}"
                                                        data-bs-dismiss="modal">Yes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    {{-- MODAL EDIT --}}
                                    <div class="modal-info-delete modal fade show"
                                        id="modal-info-edit-{{ $cate->id }}" tabindex="-1" role="dialog"
                                        aria-hidden="true">


                                        <div class="modal-dialog modal-sm modal-info" role="document">
                                            <div class="modal-content  radius-xl">
                                                <div class="modal-header">
                                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Update
                                                        category {{ $cate->category_name }}</h6>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">

                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="new-member-modal">

                                                        <div class="mb-25">
                                                            <div class="form-group mb-10">
                                                                <label for="name47">Category Name</label>
                                                                <input type="text"
                                                                    class="form-control category-name-edit named_{{ $cate->id }} category_name"
                                                                    id="name47" value="{{ $cate->category_name }}"
                                                                    data-id="{{ $cate->id }}">
                                                            </div>
                                                            <p
                                                                class="text-danger validate-add-name-category-{{ $cate->id }}">
                                                            </p>
                                                        </div>

                                                        <div class="mb-25">
                                                            <div class="form-group mb-10">
                                                                <label for="name47">Slug</label>
                                                                <input type="text"
                                                                    class="form-control slug_{{ $cate->id }}"
                                                                    id="name47" disabled value="{{ $cate->slug }}">
                                                            </div>
                                                            <p
                                                                class="text-danger validate-add-slug-category-{{ $cate->id }}">
                                                            </p>

                                                        </div>




                                                        <div class="button-group d-flex pt-25">
                                                            <button data-id="{{ $cate->id }}"
                                                                class="btn btn-primary btn-default btn-squared text-capitalize edit-category">update
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination-container d-flex justify-content-between pt-25">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete-array">
                            <i class="las la-trash fs-16"></i>Delete selected categories</a>
                        {{ $categories->links('pagination::bootstrap-5') }}
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
                                            <h6>Do you Want to delete all categories selected ?</h6>
                                            <p>"Warning: You cannot undo your saved changes."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                        data-bs-dismiss="modal">No</button>
                                    <button type="button"
                                        class="btn btn-success btn-outlined btn-sm delete-array-category"
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
        document.querySelectorAll('.category_name').forEach(element => {
            element.addEventListener('input', function() {
                let slugId = this.dataset.id
                let slug = document.querySelector(`.slug_${slugId}`)
                slug.value = slugify(this.value);
            })
        });
        $('.delete-category').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/categories/${id}') }}`,
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

        $('.restore-category').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/categories/restore/${id}') }}`,
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

        $('.forceDelete-category').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/categories/forceDelete/${id}') }}`,
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

        $(".add-category").click(function() {
            // document.body.classList.remove('loaded')

            //inputs
            let id = $(this).data("id");
            let csrf = '{{ csrf_token() }}';
            let category_name = $('.category-name-add').val();
            let slug = $('.slug_' + id).val();
            ///validate
            let validateCategoryName = $(".validate-add-name-category")
            let validateSlug = $(".validate-add-slug-category")
            $.ajax({
                url: `{{ URL::to('dashboard/categories') }}`,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: {
                    category_name: category_name,
                    slug: slug
                },
                success: function(response) {
                    console.log(response);
                    if (response) {
                        // document.body.classList.add('loaded')
                        if (response.success) {
                            btnSuccess.click()
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            btnWarning.click()
                            if (response.data) {
                                validateCategoryName.text(response?.data?.category_name?.[0] ?? '');
                                validateSlug.text(response?.data?.slug?.[0] ?? '');
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        })

        $(".edit-category").click(function() {
            // document.body.classList.remove('loaded')

            //inputs
            let id = $(this).data("id");
            let csrf = '{{ csrf_token() }}';
            let category_name = $('.named_' + id).val();
            let slug = $('.slug_' + id).val();
            ///validate
            let validateCategoryName = $(".validate-add-name-category-" + id)
            let validateSlug = $(".validate-add-slug-category-" + id)
            $.ajax({
                url: `{{ URL::to('dashboard/categories/${id}') }}`,
                type: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: {
                    category_name: category_name,
                    slug: slug
                },
                success: function(response) {
                    console.log(response);
                    if (response) {
                        // document.body.classList.add('loaded')
                        if (response.success) {
                            btnSuccess.click()
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            btnWarning.click()
                            if (response.data) {
                                validateCategoryName.text(response?.data?.category_name?.[0] ?? '');
                                validateSlug.text(response?.data?.slug?.[0] ?? '');
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        })

        $('.delete-array-category').click(function() {
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
                url: `{{ URL::to('dashboard/categories/forceDelete/${id}') }}`,
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
