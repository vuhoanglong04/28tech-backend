@extends('layout.main')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Authorization</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i
                                        class="uil uil-estate"></i>Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.groups.index') }}"><i
                                        class="uil uil-estate"></i>Groups</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Authorization</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card card-default card-md mb-4">

            <div class="card-body pt-sm-20 pt-3">
                <form action="{{ route('admin.groups.update', $group->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="text" class="d-none" name="permissions" value="1">
                    <div class="checkbox-group-wrapper">
                        @foreach ($modules as $module)
                            <div class="checkbox-group d-flex gap-5 align-items-center my-3">
                                <h6>{{ ucfirst($module->module_name) }}</h6>
                                @foreach (json_decode($module->module_actions, true) ?? [] as $role)
                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                        <input class="checkbox" type="checkbox" value="{{ $role }}"
                                            id="check-grp-{{ $module->module_name }}-{{ $role }}"
                                            name="{{ $module->module_name }}[]"
                                            @php
$permissions = json_decode($group->permissions, true);
                                            if (isset($permissions[$module->module_name]) && in_array($role, $permissions[$module->module_name])) {
                                                echo "checked";
                                            } @endphp>
                                        <label for="check-grp-{{ $module->module_name }}-{{ $role }}">
                                            <span class="checkbox-text">{{ ucfirst($role) }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach


                    </div>
                    <div class="checkbox-group-header mb-20 d-flex gap-2 align-items-center">
                        <div class="checkbox-theme-2 custom-checkbox  check-all">
                            <label for="check-3" class="btn btn-primary btn-xs btn-squared py-2">
                                <span class="checkbox-text">
                                    Selected All
                                </span>
                            </label>
                            <input class="checkbox" type="checkbox" id="check-3">

                        </div>
                        <div class="checkbox-theme-2 custom-checkbox  check-all">
                            <button type="submit" class="btn btn-primary btn-xs btn-squared py-2">
                                <span class="checkbox-text">
                                    Save
                                </span>
                            </button>
                        </div>
                        <div class="checkbox-theme-2 custom-checkbox  check-all">
                            <a href="{{ route('admin.groups.index') }}" class="btn btn-light btn-xs btn-squared py-2">
                                <span class="checkbox-text">
                                    Cancel
                                </span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
