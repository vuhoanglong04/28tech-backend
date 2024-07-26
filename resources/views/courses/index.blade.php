@extends('layout.main')
@section('content')
    <div class="course-ticket mt-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main user-member justify-content-sm-between ">
                        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                            <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">Courses</h4>
                                <span class="sub-title ms-sm-25 ps-sm-25"></span>
                            </div>

                            <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                                    placeholder="Search by Name" aria-label="Search">
                            </form>

                        </div>
                        <div class="action-btn">
                            <a href="{{ route('admin.courses.create') }}" class="btn px-15 btn-primary">
                                <i class="las la-plus fs-16"></i>Create New Course</a>

                        </div>
                    </div>

                </div>
            </div>

            @if (session('success'))
                <script>
                    btnSuccess.click();
                </script>
            @endif
            <div class="row mt-2">
                @foreach ($courses as $course)
                    <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25 ">
                        <a href="{{ route('admin.courses.show', $course->id) }}">
                            <div class="course-card">
                                <div class="course-card__img-area">
                                    <img class="big-img" src="{{ $course->image }}" alt="gallery">
                                </div>
                                <div class="course-card__body">
                                    <div class="course-card__title">
                                        <a href="{{ route('admin.courses.show', $course->id) }}">
                                            <h4>{{ $course->course_name }}</h4>
                                        </a>
                                    </div>
                                    <div class="course-card__about">

                                        <span>28Tech Team</span>
                                    </div>
                                </div>
                                <div class="course-card__footer flex flex-column align-items-start mt-1">
                                    <div class="course-card__footer_left mb-1">
                                        <div class="total-money color-success d-flex gap-3 fs-5">
                                            <p> {{ \App\Helpers\NumberHelper::formatNumber($course->discount) }}VNĐ
                                            </p>
                                            <p class="fw-lighter text-decoration-line-through">
                                                {{ \App\Helpers\NumberHelper::formatNumber($course->price) }}VNĐ
                                            </p>
                                        </div>
                                    </div>
                                    <div class="course-card__footer_right">
                                        <div class="total-lextures no-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="svg replaced-svg">
                                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z">
                                                </path>
                                            </svg>
                                            {{ $course->number_of_sessions }} Sessions
                                        </div>
                                        <div class="total-hours no-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="svg replaced-svg">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            {{ 2 * $course->number_of_sessions }} hrs
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <div class="pagination-container d-flex justify-content-end pt-25 mt-3 mb-3">

                {{ $courses->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
@endsection
