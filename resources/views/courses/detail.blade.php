@extends('layout.main')
@section('content')
    <div class="course-details mt-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Course Details</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i
                                                class="uil uil-estate"></i>Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.courses.index') }}">Courses</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Course Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="course-details-wrapper mb-45">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="course-details-about">
                            <div class="course-details-about__content">
                                <h1 class="main-title">{{ $course->course_name }}</h1>
                                <p class="main-title-sub mb-30">
                                    {!! $course->description !!}
                                </p>
                                <h5 class="mb-3">About Creators </h5>
                                <div class="course-details-author">
                                    <img src="https://cdn-main.28tech.com.vn/media/core/favicon.png" alt="ellipse11">
                                    <div class="course-details-author__title">
                                        <h6>28Tech Team</h6>
                                        <span>--- </span>
                                    </div>
                                </div>
                                <h5>
                                    Overview
                                </h5>
                                <p class="main-title-sub mb-30">
                                    {!! $course->overview !!}
                                </p>

                                <h5>Course content</h5>
                                <div class="course-details-collapse mb-30">
                                    <div class="course-collapse course-accordion accordion" id="accordionExample">
                                        <div class="border-0 dm-collapse dm-accordion">

                                            @php
                                                $index = 0;
                                            @endphp
                                            @foreach (json_decode($course->lessons, true) ?? [] as $lesson_name => $value)
                                                <div class="dm-collapse-item">
                                                    <div
                                                        class="border-bottom-0 mb-0 dm-collapse-item__header d-flex justify-content-between px-3 gap-2">
                                                        <a href="#" class="item-link  w-100" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse-body-a-{{ $index }}"
                                                            aria-expanded="false">
                                                            <div class="dm-collapse-title">
                                                                <i class="las la-plus"></i>
                                                                <h6>{{ $lesson_name }}</h6>
                                                            </div>
                                                            <div class="course-collapse-right">
                                                                <div class="course-collapse-lecture">
                                                                    {{ count($value) }} lectures
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <button type="button" data-name="{{ $lesson_name }}"
                                                            data-id="{{ $course->id }}"
                                                            class="btn  btn-xs btn-outline-light px-1 pr-2 text-center d-flex delete_lesson">
                                                            <i class="las la-trash fs-5 m-auto" style="color:#8231d3"></i>
                                                        </button>
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#edit-lesson-{{ $index }}"
                                                            class="btn  btn-xs btn-outline-light px-1 pr-2 text-center d-flex">
                                                            <i class="las la-edit fs-5 m-auto" style="color:#8231d3"></i>
                                                        </button>
                                                    </div>
                                                    <div id="collapse-body-a-{{ $index }}"
                                                        class="collapse dm-collapse-item__body">
                                                        <div class="collapse-body-text ">
                                                            <a class="">

                                                                @foreach ($value as $section)
                                                                    <div class="course-collapse-body-item">
                                                                        <div
                                                                            class="course-collapse-body-item__left d-flex w-100 justify-content-between">

                                                                            <div class="d-flex ">
                                                                                <div>
                                                                                    <img class="course-icon"
                                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                                        alt="play">
                                                                                </div>
                                                                                <div class="course-title text-break ">
                                                                                    {{ $section }}
                                                                                </div>
                                                                            </div>

                                                                            <div>
                                                                                <button type="button"
                                                                                    data-lesson="{{ $lesson_name }}"
                                                                                    data-id="{{ $course->id }}"
                                                                                    data-section=" {{ $section }}"
                                                                                    class="btn  btn-xs btn-outline-light px-1 pr-2 text-center d-flex delete_section">
                                                                                    <i class="las la-trash fs-5 m-auto"
                                                                                        style="color:#8231d3"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                @endforeach

                                                                <div class="form-group">
                                                                    <label for="a11"
                                                                        class="il-gray fs-14 fw-500 align-center mb-10">Create
                                                                        more section</label>
                                                                    <input type="text"
                                                                        class="form-control ih-medium ip-light radius-xs b-light px-15 section_name"
                                                                        id="a11">
                                                                    <p class="text-danger validate-create-secion"></p>

                                                                </div>
                                                                <div class="layout-button ">
                                                                    <button type="button" data-id="{{ $course->id }}"
                                                                        data-lesson = "{{ $lesson_name }}"
                                                                        class="btn btn-primary btn-default btn-squared px-30 create_section">Create</button>
                                                                </div>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- Modal EDIT LESSON -->
                                                <div class="modal fade new-member" id="edit-lesson-{{ $index }}"
                                                    role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content  radius-xl">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title fw-500" id="staticBackdropLabel">
                                                                    Update Lesson</h6>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <img src="{{ asset('assets/img') }}/svg/x.svg"
                                                                        alt="x" class="svg">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="new-member-modal">

                                                                    <div class="mb-25">
                                                                        <div class="form-group mb-10">
                                                                            <label for="name47">Lesson Name</label>
                                                                            <input type="text"
                                                                                class="form-control name" id="name47"
                                                                                value="{{ $lesson_name }}">
                                                                        </div>
                                                                        <p class="text-danger validate-edit-lesson"></p>

                                                                    </div>


                                                                    <div class="button-group d-flex pt-25">
                                                                        <button data-id="{{ $course->id }}"
                                                                            data-lesson="{{ $lesson_name }}"
                                                                            class="btn btn-primary btn-default btn-squared text-capitalize edit-lesson">Update
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
                                                @php
                                                    $index++;
                                                @endphp
                                            @endforeach

                                            <div class="dm-collapse-item">
                                                <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                    <a href="#" class="item-link" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-body-a-3" aria-expanded="false">
                                                        <div class="dm-collapse-title">
                                                            <i class="las la-plus-circle"></i>
                                                            <h6>Create new lesson</h6>
                                                        </div>
                                                        <div class="course-collapse-right">


                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapse-body-a-3" class="collapse  dm-collapse-item__body">
                                                    <div class="collapse-body-text">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput"
                                                                class="color-dark fs-14 fw-500 align-center mb-10 ">Lesson
                                                                Name</label>
                                                            <input type="text"
                                                                class="form-control ih-medium ip-gray radius-xs b-light px-15 lesson_name"
                                                                id="formGroupExampleInput" placeholder="Duran Clayton">
                                                            <p class="text-danger validate-create-lesson"></p>
                                                        </div>
                                                        <div class="layout-button">
                                                            <button data-id="{{ $course->id }}"
                                                                class="btn btn-primary btn-default btn-squared px-30 create_lesson">Save</button>
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
                    <div class="col-lg-6 mt-lg-0 mt-30">
                        <div class="cvg ">
                            <div class="cvg__item h-25 text-center">
                                <img src="{{ $course->background }}" style="object-fit: unset; min-height: 300px"
                                    alt="gallery">
                                @if (!$course->deleted_at)
                                    <span class="dm-tag tag-success tag-transparented py-2 px-4 fs-6 my-3">Active</span>
                                @else
                                    <span
                                        class="dm-tag tag-warning tag-transparented py-2 px-4 fs-6 my-3">Deactivated</span>
                                @endif
                            </div>
                            <div class="d-flex align-items-center justify-content-center flex-wrap">
                                <div class="cvg__icon-area text-center">
                                    <div class="svg-icon order-bg-opacity-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="30"
                                            viewBox="0 0 24 30" class="svg replaced-svg">
                                            <path id="book-alt"
                                                d="M25,2H10A6,6,0,0,0,4,8V26a6,6,0,0,0,6,6H25a3,3,0,0,0,3-3V5A3,3,0,0,0,25,2ZM7,8a3,3,0,0,1,3-3H25V20H10a5.865,5.865,0,0,0-3,.84Zm3,21a3,3,0,0,1,0-6H25v6Zm3-18h6a1.5,1.5,0,1,0,0-3H13a1.5,1.5,0,0,0,0,3Z"
                                                transform="translate(-4 -2)"></path>
                                        </svg>
                                    </div>
                                    <span>{{ $course->number_of_sessions }} Sessions</span>
                                </div>
                                <div class="cvg__icon-area text-center">
                                    <div class="svg-icon order-bg-opacity-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 30 30" class="svg replaced-svg">
                                            <path id="clock_1_" data-name="clock (1)"
                                                d="M21.647,17.951,18.5,16.134V9.5a1.5,1.5,0,1,0-3,0V17a1.5,1.5,0,0,0,.75,1.3l3.9,2.25a1.5,1.5,0,0,0,1.5-2.6ZM17,2A15,15,0,1,0,32,17,15,15,0,0,0,17,2Zm0,27A12,12,0,1,1,29,17,12,12,0,0,1,17,29Z"
                                                transform="translate(-2 -2)"></path>
                                        </svg>
                                    </div>
                                    <span>{{ $course->number_of_sessions * 2 }} hrs</span>
                                </div>
                                <div class="cvg__icon-area text-center">
                                    <div class="svg-icon order-bg-opacity-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30.274"
                                            viewBox="0 0 28 30.274" class="svg replaced-svg">
                                            <path id="award"
                                                d="M30.774,25.562l-4.212-7.273a10.723,10.723,0,0,0,1.305-5.16,10.879,10.879,0,0,0-21.758,0,10.723,10.723,0,0,0,1.305,5.16L3.2,25.562a1.554,1.554,0,0,0,1.352,2.331h4.46l2.269,3.823a1.628,1.628,0,0,0,1.352.777h.218a1.554,1.554,0,0,0,1.135-.762l3-5.16,3,5.206a1.554,1.554,0,0,0,1.135.746h.218a1.554,1.554,0,0,0,1.088-.435,1.352,1.352,0,0,0,.264-.326l2.269-3.823h4.46a1.577,1.577,0,0,0,1.352-2.378ZM12.622,27.939l-1.383-2.316a1.554,1.554,0,0,0-1.321-.762H7.229l2.222-3.854A10.879,10.879,0,0,0,15,23.868Zm4.367-7.04a7.771,7.771,0,1,1,7.771-7.771A7.771,7.771,0,0,1,16.989,20.9Zm7.071,3.963a1.554,1.554,0,0,0-1.321.762l-1.383,2.316-2.362-4.118a10.972,10.972,0,0,0,5.533-2.86l2.222,3.854Z"
                                                transform="translate(-2.996 -2.25)"></path>
                                        </svg>
                                    </div>
                                    <span>28Tech</span>
                                </div>

                            </div>
                            <div class="cvg__contents">
                                <div class="d-flex gap-3  align-items-center">
                                    <h1>{{ \App\Helpers\NumberHelper::formatNumber($course->discount) }}<small
                                            class="fs-5">VNĐ</small></h1>
                                    <h1 class="text-decoration-line-through text-light fs-4">
                                        {{ \App\Helpers\NumberHelper::formatNumber($course->price) }}VNĐ</h1>


                                </div>
                                <div class="d-flex gap-2">

                                    @if (!$course->deleted_at)
                                        <button data-bs-toggle="modal" data-bs-target="#soft-delete"
                                            class="btn btn-primary btn-xs btn-squared ">
                                            <i class="fas fa-eye-slash"></i>
                                            Deactivated
                                        </button>
                                    @else
                                        <button data-bs-toggle="modal" data-bs-target="#restore"
                                            class="btn btn-primary btn-xs btn-squared ">
                                            <i class="fas fa-eye"></i>
                                            Active
                                        </button>
                                    @endif
                                    <a href="{{ route('admin.courses.edit', $course->id) }}">
                                        <button class="btn btn-primary btn-xs btn-squared ">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </button>
                                    </a>
                                    <button data-bs-toggle="modal" data-bs-target="#forceDelete"
                                        class="btn btn-primary btn-xs btn-squared ">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </div>
                            </div>

                            {{-- MODAL SOFT DELETE --}}
                            <div class="modal-info-delete modal fade show" id="soft-delete" tabindex="-1"
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
                                                    <h6>Do you Want to deactivated course {{ $course->course_name }} ?</h6>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                data-bs-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-success btn-outlined btn-sm soft-delete"
                                                data-bs-dismiss="modal" data-id="{{ $course->id }}">Yes</button>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            {{-- MODAL RESTORE --}}
                            <div class="modal-info-delete modal fade show" id="restore" tabindex="-1" role="dialog"
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
                                                    <h6>Do you Want to active {{ $course->course_name }}?</h6>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                data-bs-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-success btn-outlined btn-sm restore"
                                                data-id="{{ $course->id }}" data-bs-dismiss="modal">Yes</button>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            {{-- MODAL FORCE DELETE --}}
                            <div class="modal-info-delete modal fade show" id="forceDelete" tabindex="-1"
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
                                                    <h6>Do you Want to delete permanent course {{ $course->course_name }}?
                                                    </h6>
                                                    <p>"Warning: You cannot undo your saved changes."

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                                data-bs-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-success btn-outlined btn-sm forceDelete"
                                                data-id="{{ $course->id }}" data-bs-dismiss="modal">Yes</button>
                                        </div>
                                    </div>
                                </div>


                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-default card-md mb-4">
                <div class="card-header py-20">
                    <h6>Comments</h6>
                </div>
                <div class="card-body">
                    <div class="comment-list">

                        <ul class="comment-list__ul">
                            @foreach ($reviews as $review)
                                <li class="mb-20">
                                    <div class="dm-comment-box media d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="dm-comment-box__author">
                                                <figure>
                                                    <img src="{{ $review->user->image }}"
                                                        class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                </figure>
                                            </div>
                                            <div class="dm-comment-box__content media-body">
                                                <div class="comment-content-inner cci ">

                                                    <span class="cci__author-info">{{ $review->user->name }}</span>
                                                    <div class="d-flex">
                                                        @for ($i = 1; $i <= $review->stars; $i++)
                                                            <div class="jq-star" style="width:12px;  height:12px;">
                                                                <svg version="1.0" class="jq-star-svg"
                                                                    shape-rendering="geometricPrecision"
                                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                    width="305px" height="305px"
                                                                    viewBox="60 -62 309 309"
                                                                    style="enable-background:new 64 -59 305 305; stroke-width:6px;"
                                                                    xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .svg-empty-840 {
                                                                            fill: url(#840_SVGID_1_);
                                                                        }

                                                                        .svg-hovered-840 {
                                                                            fill: url(#840_SVGID_2_);
                                                                        }

                                                                        .svg-active-840 {
                                                                            fill: url(#840_SVGID_3_);
                                                                        }

                                                                        .svg-rated-840 {
                                                                            fill: #FA8B0C;
                                                                        }
                                                                    </style>
                                                                    <linearGradient id="840_SVGID_1_"
                                                                        gradientUnits="userSpaceOnUse" x1="0"
                                                                        y1="-50" x2="0" y2="250">
                                                                        <stop offset="0" style="stop-color:#C6D0DC">
                                                                        </stop>
                                                                        <stop offset="1" style="stop-color:#C6D0DC">
                                                                        </stop>
                                                                    </linearGradient>
                                                                    <linearGradient id="840_SVGID_2_"
                                                                        gradientUnits="userSpaceOnUse" x1="0"
                                                                        y1="-50" x2="0" y2="250">
                                                                        <stop offset="0" style="stop-color:#FA8B0C">
                                                                        </stop>
                                                                        <stop offset="1" style="stop-color:#FA8B0C">
                                                                        </stop>
                                                                    </linearGradient>
                                                                    <linearGradient id="840_SVGID_3_"
                                                                        gradientUnits="userSpaceOnUse" x1="0"
                                                                        y1="-50" x2="0" y2="250">
                                                                        <stop offset="0" style="stop-color:#FA8B0C">
                                                                        </stop>
                                                                        <stop offset="1" style="stop-color:#FA8B0C">
                                                                        </stop>
                                                                    </linearGradient>
                                                                    <polygon data-side="center" class="svg-empty-840"
                                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                                        style="fill: transparent; stroke: black;">
                                                                    </polygon>
                                                                    <polygon data-side="left" class="svg-active-840"
                                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                                        style="stroke-opacity: 0;"></polygon>
                                                                    <polygon data-side="right" class="svg-active-840"
                                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                                        style="stroke-opacity: 0;"></polygon>
                                                                </svg>
                                                            </div>
                                                        @endfor
                                                        @for ($i = 1; $i <= 5 - $review->stars; $i++)
                                                            <div class="jq-star" style="width:12px;  height:12px;"><svg
                                                                    version="1.0" class="jq-star-svg"
                                                                    shape-rendering="geometricPrecision"
                                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                    width="305px" height="305px"
                                                                    viewBox="60 -62 309 309"
                                                                    style="enable-background:new 64 -59 305 305; stroke-width:6px;"
                                                                    xml:space="preserve">
                                                                    <style type="text/css">
                                                                        .svg-empty-990 {
                                                                            fill: url(#990_SVGID_1_);
                                                                        }

                                                                        .svg-hovered-990 {
                                                                            fill: url(#990_SVGID_2_);
                                                                        }

                                                                        .svg-active-990 {
                                                                            fill: url(#990_SVGID_3_);
                                                                        }

                                                                        .svg-rated-990 {
                                                                            fill: #FA8B0C;
                                                                        }
                                                                    </style>
                                                                    <linearGradient id="990_SVGID_1_"
                                                                        gradientUnits="userSpaceOnUse" x1="0"
                                                                        y1="-50" x2="0" y2="250">
                                                                        <stop offset="0" style="stop-color:#C6D0DC">
                                                                        </stop>
                                                                        <stop offset="1" style="stop-color:#C6D0DC">
                                                                        </stop>
                                                                    </linearGradient>
                                                                    <linearGradient id="990_SVGID_2_"
                                                                        gradientUnits="userSpaceOnUse" x1="0"
                                                                        y1="-50" x2="0" y2="250">
                                                                        <stop offset="0" style="stop-color:#FA8B0C">
                                                                        </stop>
                                                                        <stop offset="1" style="stop-color:#FA8B0C">
                                                                        </stop>
                                                                    </linearGradient>
                                                                    <linearGradient id="990_SVGID_3_"
                                                                        gradientUnits="userSpaceOnUse" x1="0"
                                                                        y1="-50" x2="0" y2="250">
                                                                        <stop offset="0" style="stop-color:#FEF7CD">
                                                                        </stop>
                                                                        <stop offset="1" style="stop-color:#FF9511">
                                                                        </stop>
                                                                    </linearGradient>
                                                                    <polygon data-side="center" class="svg-empty-990"
                                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                                        style="fill: transparent; stroke: black;">
                                                                    </polygon>
                                                                    <polygon data-side="left" class="svg-empty-990"
                                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                                        style="stroke-opacity: 0;"></polygon>
                                                                    <polygon data-side="right" class="svg-empty-990"
                                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                                        style="stroke-opacity: 0;"></polygon>
                                                                </svg></div>
                                                        @endfor
                                                    </div>


                                                    <p class="cci__comment-text">{{ $review->comments }}</p>



                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('admin.reviews.forceDelete', $review->id) }}"
                                            method="GET">
                                            @csrf
                                            <button type="submit"
                                                class="btn  btn-xs btn-outline-light px-1 pr-2 text-center d-flex">
                                                <i class="las la-trash fs-5 m-auto" style="color:#8231d3"></i>
                                            </button>
                                        </form>

                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card card-default card-md mb-4">
                <div class="card-header py-20">
                    <h6>Basic comment</h6>
                </div>
                <div class="card-body pb-10">
                    <div class="reply-editor media">
                        <div class="reply-editor__author">
                            <img src="{{ Auth::user()->image ?? '' }}" class="bg-opacity-primary d-flex"
                                alt="Reply Editor Author">
                        </div>

                        <div class="reply-editor__form media-body" id="add_comments">
                            <form action="{{ route('admin.reviews.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12">
                                        <textarea name="comments" class="form-control mb-4"></textarea>
                                        <input type="text" class="d-none" name="user_id"
                                            value="{{ Auth::user()->id }}">
                                        <input type="text" class="d-none" name="course_id"
                                            value="{{ $course->id }}">
                                        <input type="text" class="d-none" name="order_detail_id" value="0">
                                        <input type="text" class="d-none" name="stars" value="0">
                                        @if ($errors->has('comments'))
                                            <p class="text-danger">{{ $errors->first('comments') }}</p>
                                        @endif
                                        <button type="submit"
                                            class="btn btn-primary btn-lg btn-squared btn-shadow-primary fw-400">Add
                                            Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @if ($errors->has('comments') || session('delete'))
        <script>
            function scrollToElement() {
                var element = document.getElementById('add_comments');
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
            scrollToElement();
        </script>
    @endif
@endsection

@push('scripts')
    @if (session('success'))
        <script>
            btnSucces.click();
        </script>
    @endif
    <script>
        $('.soft-delete').click(function() {
            let id = $(this).data('id');
            let csrf = '{{ csrf_token() }}';
            $.ajax({
                url: `{{ URL::to('dashboard/courses/${id}') }}`,
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


        $('.restore').click(function() {
            let id = $(this).data('id');
            let csrf = '{{ csrf_token() }}';
            $.ajax({
                url: `{{ URL::to('dashboard/courses/restore/${id}') }}`,
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



        $('.forceDelete').click(function() {
            let id = $(this).data('id');
            let csrf = '{{ csrf_token() }}';
            $.ajax({
                url: `{{ URL::to('dashboard/courses/forceDelete/${id}') }}`,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                success: function(response) {
                    if (response) {
                        btnSuccess.click()
                        setTimeout(() => {
                            window.location.href = `{{ URL::to('dashboard/courses') }}`
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

        $('.create_lesson').click(function(e) {
            e.preventDefault();
            let lesson_name = $(".lesson_name")
            if (lesson_name.val() == "") {
                $('.validate-create-lesson').text("Please enter new lesson name")
                return;
            } else $('.validate-create-lesson').text("")

            let id = $(this).data('id');
            let csrf = '{{ csrf_token() }}';
            $.ajax({
                url: `{{ URL::to('dashboard/courses/${id}') }}`,
                type: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                data: {
                    lessons: lesson_name.val()
                },
                success: function(response) {
                    console.log(response);
                    if (response) {
                        btnSuccess.click()
                        setTimeout(() => {
                            window.location.reload();
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
        $('.delete_lesson').each(function() {
            $(this).click(function() {

                let id = $(this).data('id');
                let lesson_name = $(this).data('name');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/courses/${id}') }}`,
                    type: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': csrf
                    },
                    data: {
                        delete_lessons: lesson_name
                    },
                    success: function(response) {
                        console.log(response);
                        if (response) {
                            btnSuccess.click()
                            setTimeout(() => {
                                window.location.reload();
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

        $('.create_section').each(function() {
            $(this).click(function() {

                let secion_name = this.parentElement.parentElement.querySelector('.section_name')

                if (secion_name.value == "") {
                    secion_name.parentElement.querySelector('.validate-create-secion').innerText =
                        "Please enter section name"
                    return;
                } else secion_name.parentElement.querySelector('.validate-create-secion').innerText =
                    ""

                let id = $(this).data('id');
                let lesson_name = $(this).data('lesson');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/courses/${id}') }}`,
                    type: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': csrf
                    },
                    data: {
                        update_lesson: lesson_name,
                        create_section_name: secion_name.value
                    },
                    success: function(response) {
                        console.log(response);
                        if (response) {
                            btnSuccess.click()
                            setTimeout(() => {
                                window.location.reload();
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
        $('.delete_section').each(function() {
            $(this).click(function() {

                let id = $(this).data('id');
                let lesson_name = $(this).data('lesson');
                let section_name = $(this).data('section');
                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/courses/${id}') }}`,
                    type: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': csrf
                    },
                    data: {
                        delete_section: section_name,
                        from_lesson: lesson_name
                    },
                    success: function(response) {
                        console.log(response);
                        if (response) {
                            btnSuccess.click()
                            setTimeout(() => {
                                window.location.reload();
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

        $('.edit-lesson').each(function() {
            $(this).click(function() {
                let id = $(this).data('id');
                let lesson_name = $(this).data('lesson');
                let new_lesson_name = this.parentElement.parentElement.querySelector('.name')
                if (new_lesson_name.value == "") {
                    this.parentElement.parentElement.querySelector('.validate-edit-lesson').innerText =
                        "Please enter new lesson name"
                    return;
                } else this.parentElement.parentElement.querySelector('.validate-edit-lesson').innerText =
                    ""

                let csrf = '{{ csrf_token() }}';
                $.ajax({
                    url: `{{ URL::to('dashboard/courses/${id}') }}`,
                    type: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': csrf
                    },
                    data: {
                        change_name_lesson: lesson_name,
                        new_lesson_name: new_lesson_name.value
                    },
                    success: function(response) {
                        console.log(response);
                        if (response) {
                            btnSuccess.click()
                            setTimeout(() => {
                                window.location.reload();
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
