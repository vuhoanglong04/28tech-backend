@extends('layout.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">add class</h4>

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
                                            <h6 class="fw-500">About class</h6>
                                        </div>

                                        <div class="add-product__body px-sm-40 px-20">

                                            <form action="{{ route('admin.classes.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name1">Class name</label>
                                                    <input type="text" class="form-control" id="name1"
                                                        placeholder="..." name="class_name" value="{{ old('class_name') }}">
                                                    @if ($errors->has('class_name'))
                                                        <p class="text-danger">{{ $errors->first('class_name') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group mb-20">
                                                    <label for="name47">Course</label>

                                                    <div class="category-member">
                                                        <select class="js-example-basic-single js-states form-control"
                                                            id="category-member" name="course_id">
                                                            @foreach ($courses as $course)
                                                                @if (!$course->deleted_at)
                                                                    <option value="{{ $course->id }}"
                                                                        {{ $course->id == 1 ? 'selected' : '' }}>
                                                                        {{ $course->course_name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('course_id'))
                                                        <p class="text-danger">{{ $errors->first('course_id') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group mb-20">
                                                    <label for="name47">Lecturer</label>
                                                    <div class="category-member">
                                                        <select class="js-example-basic-single js-states form-control"
                                                            id="" name="teacher_id">
                                                            @foreach ($users as $user)
                                                                @if (!$course->deleted_at && $user->group_id == '10')
                                                                    <option value="{{ $user->id }}"
                                                                        {{ $user->id == 1 ? 'selected' : '' }}>
                                                                        {{ $user->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('teacher_id'))
                                                        <p class="text-danger">{{ $errors->first('teacher_id') }}</p>
                                                    @endif
                                                </div>

                                                <div class="form-group mb-20">
                                                    <label for="name1">Date Start</label>
                                                    <input type="date" class="form-control" id="name1"
                                                        placeholder="..." name="date_start"
                                                        value="{{ old('class_name') }}">
                                                    @if ($errors->has('date_start'))
                                                        <p class="text-danger">{{ $errors->first('date_start') }}</p>
                                                    @endif
                                                </div>


                                                <div class=" mb-20">
                                                    <div class="time-picker">
                                                        <div class="form-group mb-0">
                                                            <label for="name1">Time Study</label>

                                                            <div
                                                                class="input-container icon-right position-relative w-100 color-light ">
                                                                <span class="input-icon icon-right">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="svg replaced-svg">
                                                                        <circle cx="12" cy="12" r="10">
                                                                        </circle>
                                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                                    </svg>
                                                                </span>

                                                                <input type="text"
                                                                name="time_study"
                                                                    class="form-control ih-medium ip-light radius-xs b-light px-15 color-lighten hasWickedpicker"
                                                                  placeholder="12:00 AM" value="{{old('time_study')}}">

                                                                @if ($errors->has('time_study'))
                                                                    <p class="text-danger">
                                                                        {{ $errors->first('time_study') }}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-20">
                                                    <label for="name1">Schedule</label>
                                                    <input type="text" class="form-control" id="name1"
                                                        placeholder="Monday - Friday" name="schedule"
                                                        value="{{ old('schedule') }}">
                                                    @if ($errors->has('schedule'))
                                                        <p class="text-danger">{{ $errors->first('schedule') }}</p>
                                                    @endif
                                                </div>
                                                <div
                                                    class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">

                                                    <button type="submit"
                                                        class="btn btn-primary btn-default btn-squared text-capitalize">save
                                                        classes
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
