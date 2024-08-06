@extends('layout.main')
@section('content')
    <style>
        .gc__img {
            width: 30rem !important;
            height: 20rem !important;
            object-fit: cover
        }
    </style>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">gallery</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">gallery 2</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="gallery-filter mb-sm-50 mb-30">
                    <ul
                        class="simplefilter w-100 ap-tab-main px-sm-25 px-15 bg-white d-flex flex-wrap align-items-center radius-xl">
                        <li class="fltr-controls nav-link active" data-filter="all">All</li>
                        <li class="fltr-controls nav-link" data-filter="1">Users</li>
                        <li class="fltr-controls nav-link" data-filter="2">Courses</li>
                        <li class="fltr-controls nav-link" data-filter="3">Posts</li>
                        <li class="fltr-controls nav-link" data-filter="4"></li>
                    </ul>
                    <div class="push-down push-down--style">
                        <div class="filtr-container"
                            style="padding: 25px; position: relative; width: 100%; display: flex; flex-wrap: wrap; height: 688px;">

                            @foreach ($users as $user)
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Busy streets"
                                    style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 262.75px; transition: 0.5s ease-out, width 1ms;">
                                    <div class="card">
                                        <div class="gc gc--gallery2">
                                            <div class="gc__img h-100 w-100">
                                                <img src="{{ $user->image }}" alt="img" class=" radius-xl">
                                            </div>
                                            <div class="card-body">
                                                <div class="gc__title">
                                                    <p class="title">{{ $user->name }}</p>
                                                    <span>{{ $user->created_at }}</span>
                                                </div>

                                                <ul class="gc__link">
                                                    <li><a data-url="{{ $user->image }}" class="download"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="svg replaced-svg">
                                                                <path
                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                                                </path>
                                                                <path
                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                                                </path>
                                                            </svg></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($courses as $course)
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="Busy streets"
                                    style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 262.75px; transition: 0.5s ease-out, width 1ms;">
                                    <div class="card">
                                        <div class="gc gc--gallery2">
                                            <div class="gc__img h-50 ">
                                                <img src="{{ $course->image }}" alt="img" class=" radius-xl">
                                            </div>
                                            <div class="card-body">
                                                <div class="gc__title">
                                                    <p class="title">{{ $course->course_name }}</p>
                                                    <span>{{ $course->created_at }}</span>
                                                </div>

                                                <ul class="gc__link">
                                                    <li><a data-url="{{ $course->image }}" class="download"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="svg replaced-svg">
                                                                <path
                                                                    d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                                                </path>
                                                                <path
                                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                                                </path>
                                                            </svg></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.querySelectorAll('.download').forEach(element => {
            element.addEventListener('click', async () => {
                const url = element.dataset.url
                console.log(url);
                try {
                    await navigator.clipboard.writeText(url);
                    alert('Dữ liệu đã được sao chép vào clipboard!');
                } catch (err) {
                    alert('Không thể sao chép dữ liệu: ', err);
                }
            });
        });
    </script>
@endpush
