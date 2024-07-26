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
                                            <div class="dm-collapse-item">
                                                <div class="border-bottom-0 mb-0 dm-collapse-item__header active">
                                                    <a href="#" class="item-link" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-body-a-1" aria-expanded="true">
                                                        <div class="dm-collapse-title">
                                                            <i class="las la-plus"></i>
                                                            <h6>Getting Started</h6>
                                                        </div>
                                                        <div class="course-collapse-right">
                                                            <div class="course-collapse-lecture">
                                                                05 Lectures
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapse-body-a-1"
                                                    class="collapse show dm-collapse-item__body show">
                                                    <div class="collapse-body-text">
                                                        <a class="popup-youtube"
                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Course Introduction</div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title"> Demand of UI/UX Design
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Tools</div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dm-collapse-item">
                                                <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                    <a href="#" class="item-link" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-body-a-2" aria-expanded="false">
                                                        <div class="dm-collapse-title">
                                                            <i class="las la-plus"></i>
                                                            <h6>User Interface Vs User Experience</h6>
                                                        </div>
                                                        <div class="course-collapse-right">
                                                            <div class="course-collapse-lecture">
                                                                05 Lectures
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapse-body-a-2" class="collapse  dm-collapse-item__body">
                                                    <div class="collapse-body-text">
                                                        <a class="popup-youtube"
                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Course Introduction</div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title"> Demand of UI/UX Design
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Tools</div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dm-collapse-item">
                                                <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                    <a href="#" class="item-link" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-body-a-3" aria-expanded="false">
                                                        <div class="dm-collapse-title">
                                                            <i class="las la-plus"></i>
                                                            <h6>Design Fundamental</h6>
                                                        </div>
                                                        <div class="course-collapse-right">
                                                            <div class="course-collapse-lecture">
                                                                15 Lectures
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapse-body-a-3" class="collapse  dm-collapse-item__body">
                                                    <div class="collapse-body-text">
                                                        <a class="popup-youtube"
                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Course Introduction</div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title"> Demand of UI/UX Design
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Tools</div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dm-collapse-item">
                                                <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                    <a href="#" class="item-link" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-body-a-4" aria-expanded="false">
                                                        <div class="dm-collapse-title">
                                                            <i class="las la-plus"></i>
                                                            <h6>Colour Theory</h6>
                                                        </div>
                                                        <div class="course-collapse-right">
                                                            <div class="course-collapse-lecture">
                                                                03 Lectures
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapse-body-a-4" class="collapse  dm-collapse-item__body">
                                                    <div class="collapse-body-text">
                                                        <a class="popup-youtube"
                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Course Introduction</div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title"> Demand of UI/UX Design
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Tools</div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dm-collapse-item">
                                                <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                    <a href="#" class="item-link" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-body-a-5" aria-expanded="false">
                                                        <div class="dm-collapse-title">
                                                            <i class="las la-plus"></i>
                                                            <h6>Typography</h6>
                                                        </div>
                                                        <div class="course-collapse-right">
                                                            <div class="course-collapse-lecture">
                                                                03 Lectures
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapse-body-a-5" class="collapse  dm-collapse-item__body">
                                                    <div class="collapse-body-text">
                                                        <a class="popup-youtube"
                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Course Introduction</div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title"> Demand of UI/UX Design
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="course-collapse-body-item">
                                                                <div class="course-collapse-body-item__left">
                                                                    <img class="course-icon"
                                                                        src="{{ asset('assets/img') }}/play.png"
                                                                        alt="play">
                                                                    <div class="course-title">Tools</div>
                                                                </div>

                                                            </div>
                                                        </a>
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
                                <span class="dm-tag tag-success tag-transparented p-2 fs-6 mt-2 mb-2 ">ACtive</span>
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
                                    <button data-bs-toggle="modal" data-bs-target="#soft-delete"
                                        class="btn btn-primary btn-xs btn-squared ">
                                        <i class="fas fa-eye-slash"></i>
                                        Deactivated
                                    </button>
                                    <button class="btn btn-primary btn-xs btn-squared ">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </button>
                                    <button class="btn btn-primary btn-xs btn-squared ">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.soft-delete').click(function() {
            let id = $(this).data('id');
            let csrf = '{{ csrf_token() }}';
            console.log(id);
            return;
            $.ajax({
                url: `{{ URL::to('dashboard/courses/${id}') }}`,
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
    </script>
@endpush
