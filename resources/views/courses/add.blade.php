@extends('layout.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">add course</h4>

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
                                            <h6 class="fw-500">About course</h6>
                                        </div>

                                        <div class="add-product__body px-sm-40 px-20">

                                            <form action="{{ route('admin.courses.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name1">course name</label>
                                                    <input type="text" class="form-control course_name" id="name1"
                                                        placeholder="C++" name="course_name"
                                                        value="{{ old('course_name') }}">
                                                    @if ($errors->has('course_name'))
                                                        <p class="text-danger">{{ $errors->first('course_name') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="name8">SLug</label>
                                                    <input type="text" class="form-control slug" name="slug"
                                                        id="name8" value="{{ old('slug') }}">
                                                    @if ($errors->has('slug'))
                                                        <p class="text-danger">{{ $errors->first('slug') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group quantity-appearance">
                                                    <label>price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="svg replaced-svg">
                                                                    <line x1="12" y1="1" x2="12"
                                                                        y2="23"></line>
                                                                    <path
                                                                        d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="pt_Quantity">
                                                            <input type="number" name="price" class="form-control"
                                                                min="0" step="1"
                                                                value="{{ old('price') ?? 0 }}" data-inc="1">
                                                            <div class="pt_QuantityNav">
                                                                <div class="pt_QuantityButton pt_QuantityUp"><i
                                                                        class="las la-angle-up"></i></div>
                                                                <div class="pt_QuantityButton pt_QuantityDown"><i
                                                                        class="las la-angle-down"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('price'))
                                                        <p class="text-danger">{{ $errors->first('price') }}</p>
                                                    @endif
                                                </div>

                                                <div class="form-group quantity-appearance">
                                                    <label>Discount</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon2">
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
                                                            <input type="number" class="form-control" min="0"
                                                                step="1" value="{{ old('discount') ?? 0 }}"
                                                                name="discount" data-inc="1">
                                                            <div class="pt_QuantityNav">
                                                                <div class="pt_QuantityButton pt_QuantityUp"><i
                                                                        class="las la-angle-up"></i></div>
                                                                <div class="pt_QuantityButton pt_QuantityDown"><i
                                                                        class="las la-angle-down"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('discount'))
                                                        <p class="text-danger">{{ $errors->first('discount') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="name47">Category</label>

                                                    <div class="category-member">
                                                        <select
                                                            class="js-example-basic-single js-states form-control group_id"
                                                            id="category-member" name="category_id">
                                                            @foreach ($categories as $cate)
                                                                @if (!$cate->deleted_at)
                                                                    <option value="{{ $cate->id }}"
                                                                        {{ $cate->id == 1 ? 'selected' : '' }}>
                                                                        {{ $cate->category_name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('category_id'))
                                                        <p class="text-danger">{{ $errors->first('category_id') }}</p>
                                                    @endif
                                                </div>





                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Product Description</label>
                                                    <div class="form-group formElement-editor mb-0">
                                                        <div
                                                            class="trumbowyg-box trumbowyg-editor-visible trumbowyg-en trumbowyg">

                                                            <textarea name="description" id="mail-reply-message2" class="form-control-lg trumbowyg-textarea"
                                                                placeholder="Type your description..." tabindex="-1" style="height: 44.9855px;">{{ old('description') ?? '' }}</textarea>
                                                            <div class="trumbowyg-dropdown-formatting trumbowyg-dropdown trumbowyg-fixed-top "
                                                                data-trumbowyg-dropdown="formatting"
                                                                style="display: none;"><button type="button"
                                                                    class="trumbowyg-p-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-p"></use>
                                                                    </svg>Paragraph</button><button type="button"
                                                                    class="trumbowyg-blockquote-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-blockquote"></use>
                                                                    </svg>Quote</button><button type="button"
                                                                    class="trumbowyg-h1-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-h1"></use>
                                                                    </svg>Header 1</button><button type="button"
                                                                    class="trumbowyg-h2-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-h2"></use>
                                                                    </svg>Header 2</button><button type="button"
                                                                    class="trumbowyg-h3-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-h3"></use>
                                                                    </svg>Header 3</button><button type="button"
                                                                    class="trumbowyg-h4-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-h4"></use>
                                                                    </svg>Header 4</button></div>
                                                            <div class="trumbowyg-dropdown-link trumbowyg-dropdown trumbowyg-fixed-top "
                                                                data-trumbowyg-dropdown="link" style="display: none;">
                                                                <button type="button"
                                                                    class="trumbowyg-createLink-dropdown-button "
                                                                    title="(Ctrl + K)"><svg>
                                                                        <use xlink:href="#trumbowyg-create-link"></use>
                                                                    </svg>Insert link</button><button type="button"
                                                                    class="trumbowyg-unlink-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-unlink"></use>
                                                                    </svg>Remove link</button>
                                                            </div>
                                                            <div class="trumbowyg-overlay"></div>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('description'))
                                                        <p class="text-danger">{{ $errors->first('description') }}</p>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Overview</label>
                                                    <div class="form-group formElement-editor mb-0">
                                                        <div
                                                            class="trumbowyg-box trumbowyg-editor-visible trumbowyg-en trumbowyg">

                                                            <textarea name="overview" id="mail-reply-message2" class="form-control-lg trumbowyg-textarea"
                                                                placeholder="Type your message..." tabindex="-1" style="height: 44.9855px;">{{ old('overview') ?? '' }}</textarea>
                                                            <div class="trumbowyg-dropdown-formatting trumbowyg-dropdown trumbowyg-fixed-top "
                                                                data-trumbowyg-dropdown="formatting"
                                                                style="display: none;"><button type="button"
                                                                    class="trumbowyg-p-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-p"></use>
                                                                    </svg>Paragraph</button><button type="button"
                                                                    class="trumbowyg-blockquote-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-blockquote"></use>
                                                                    </svg>Quote</button><button type="button"
                                                                    class="trumbowyg-h1-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-h1"></use>
                                                                    </svg>Header 1</button><button type="button"
                                                                    class="trumbowyg-h2-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-h2"></use>
                                                                    </svg>Header 2</button><button type="button"
                                                                    class="trumbowyg-h3-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-h3"></use>
                                                                    </svg>Header 3</button><button type="button"
                                                                    class="trumbowyg-h4-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-h4"></use>
                                                                    </svg>Header 4</button></div>
                                                            <div class="trumbowyg-dropdown-link trumbowyg-dropdown trumbowyg-fixed-top "
                                                                data-trumbowyg-dropdown="link" style="display: none;">
                                                                <button type="button"
                                                                    class="trumbowyg-createLink-dropdown-button "
                                                                    title="(Ctrl + K)"><svg>
                                                                        <use xlink:href="#trumbowyg-create-link"></use>
                                                                    </svg>Insert link</button><button type="button"
                                                                    class="trumbowyg-unlink-dropdown-button "><svg>
                                                                        <use xlink:href="#trumbowyg-unlink"></use>
                                                                    </svg>Remove link</button>
                                                            </div>
                                                            <div class="trumbowyg-overlay"></div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('overview'))
                                                        <p class="text-danger">{{ $errors->first('overview') }}</p>
                                                    @endif
                                                </div>

                                                <div class="mb-25">
                                                    <div class="form-group mb-10">
                                                        <label for="name47">Image</label>
                                                        <div class="dm-tag-wrap">

                                                            <div class="dm-upload">
                                                                <div class="dm-upload__button">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-lg btn-outline-lighten btn-upload"
                                                                        onclick="$('#upload-1').click()"> <img
                                                                            class="svg"
                                                                            src="{{ asset('assets/img/') }}/svg/upload.svg"
                                                                            alt="upload"> Click to Upload</a>
                                                                    <input type="file" name="image"
                                                                        class="upload-one image" id="upload-1">
                                                                </div>
                                                                <div class="dm-upload__file">
                                                                    <ul>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @if ($errors->has('image'))
                                                            <p class="text-danger">{{ $errors->first('image') }}</p>
                                                        @endif
                                                    </div>

                                                </div>

                                                <div class="mb-25">
                                                    <label for="formFile" class="form-label text-dark "
                                                        style="font-size:14px">Background</label>
                                                    <input class="form-control" name="background" type="file"
                                                        id="formFile">
                                                    @if ($errors->has('background'))
                                                        <p class="text-danger">{{ $errors->first('background') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="name1">Number Of Sessions</label>
                                                    <input type="number" name="number_of_sessions" class="form-control"
                                                        id="name1" placeholder="0"
                                                        value="{{ old('number_of_sessions') }}">
                                                    @if ($errors->has('number_of_sessions'))
                                                        <p class="text-danger">{{ $errors->first('number_of_sessions') }}
                                                        </p>
                                                    @endif
                                                </div>

                                                <div
                                                    class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">

                                                    <button type="submit"
                                                        class="btn btn-primary btn-default btn-squared text-capitalize">save
                                                        product
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
@endsection
@push('scripts')
    <script>
        $(".course_name").on('input', function(e) {

            $('.slug').val(slugify($(this).val()));
        })

        function deleteFile(e) {
            var inputImage = document.querySelector('.image')
            e.parentElement.remove();
            inputImage.value = "";
        }
    </script>
@endpush
