@extends('layout.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">edit banner</h4>

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
                                            <h6 class="fw-500">About banner</h6>
                                        </div>

                                        <div class="add-product__body px-sm-40 px-20">

                                            <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-25">
                                                    <label for="formFile" class="form-label text-dark "
                                                        style="font-size:14px">Banner</label>
                                                    <input class="form-control" name="banner_url" type="file"
                                                        id="formFile">
                                                    @if ($errors->has('banner_url'))
                                                        <p class="text-danger">{{ $errors->first('banner_url') }}</p>
                                                    @endif
                                                </div>

                                                <div class="form-group mb-10">
                                                    <label for="name47">Href</label>
                                                    <input type="text" class="form-control href" name="href"
                                                        id="name47" placeholder="https://chatgpt.com/"
                                                        value="{{ old('href') ?? $banner->href }}">
                                                    @if ($errors->has('href'))
                                                        <p class="text-danger">{{ $errors->first('href') }}</p>
                                                    @endif
                                                </div>



                                                <div
                                                    class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">

                                                    <button type="submit"
                                                        class="btn btn-primary btn-default btn-squared text-capitalize">save
                                                        banner
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
        function deleteFile(e) {
            var inputImage = document.querySelector('.image')
            e.parentElement.remove();
            inputImage.value = "";
        }
    </script>
@endpush
