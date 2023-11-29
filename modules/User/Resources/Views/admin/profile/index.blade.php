@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['پروفایل کاربری']])
@endsection


@section('content')
    <h3 class="mb-4">پروفایل کاربری</h3>

    <form action="{{ route('users.profile.store') }}" method="post">
        @csrf
        <div class="row mb-4">
            <div class="col-12 col-md-3">
                <div class="form-group">
                    <label for="" class="form-label">
                        <span class="text-danger">*</span>
                        نام:
                    </label>
                    <input type="text" name="first_name" class="form-control form-control-sm" value="{{ $user->first_name }}">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    <label for="" class="form-label">
                        <span class="text-danger">*</span>
                        نام خانوادگی:
                    </label>
                    <input type="text" class="form-control form-control-sm" name="last_name" value="{{ $user->last_name }}">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    <label for="" class="form-label">
                        <span class="text-danger">*</span>
                        کد ملی:
                    </label>
                    <input type="text" maxlength="10" class="form-control form-control-sm" name="national_code" value="{{ $user->national_code }}">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    <label for="" class="form-label">
                        شغل:
                    </label>
                    <input type="text" class="form-control form-control-sm" name="job" value="{{ $user->job }}">
                </div>
            </div>
        </div>


        <div class="row mb-4">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="">موبایل</label>
                    <div class="row">
                        <div class="col-12">
                            <label>{{ $user->mobile }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-mb-4">
            <div class="col-12 col-md-6">
                <button type="submit" class="btn btn-sm btn-success">ثبت</button>
            </div>
        </div>
    </form>

@endsection
