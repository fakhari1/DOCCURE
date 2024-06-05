@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['تنظیمات', 'تنظیمات اصلی']])
@endsection

@section('content')

    <h3 class="mb-4">تنظیمات اصلی سایت</h3>
    <form action="{{ route('admin.settings.general.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <span class="text-danger">*</span>
            <label>نام وبسایت</label>
            <input type="text" name="site_name" class="form-control"
                   value="{{ $settings->site_name ?? old('site_name') }}">
        </div>

        <div class="form-group">
            <span class="text-danger">*</span>
            <label>عنوان نمایشی صفحه اصلی سایت (نمونه: پایگاه اینترنتی نوبت دهی دکتر مجید سمیعی)</label>
            <input type="text" name="title" class="form-control"
                   value="{{ $settings->title ?? old('title') }}">
        </div>

        <div class="form-group">
            <span class="text-danger">*</span>
            <label for="">تخصص</label>
            <input type="text" name="specialization" class="form-control"
                   value="{{ $settings->specialization ?? old('specialization') }}">
        </div>

        <div class="form-group">
            <label for="">توضیحات</label>
            <input type="text" name="description" class="form-control"
                   value="{{ $settings->description ?? old('description') }}">
        </div>

        <div class="row">
            <div class="col-12">
                <label>شماره تلفن های ثابت</label>
            </div>
            <div class="col-lg-4 col-12">
                <div class="form-group">

                    <input type="text"
                           class="form-control mb-3"
                           name="phones[]"
                           value="{{ $settings->landline_phones[0] ?? old('phones[landline]') }}"
                           placeholder="خط 1">
                </div>

            </div>
            <div class="col-lg-4 col-12">
                <div class="form-group">
                    <input type="text"
                           class="form-control mb-3"
                           name="phones[]"
                           value="{{ $settings->landline_phones[1] ?? old('phones[landline]') }}"
                           placeholder="خط 2">
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="form-group">
                    <input type="text"
                           class="form-control mb-3"
                           name="phones[]"
                           value="{{ $settings->landline_phones[2] ?? old('phones[landline]') }}"
                           placeholder="خط 3">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">آدرس</label>
            <span class="text-danger">*</span>
            <input class="form-control" type="text" name="address" value="{{ $settings->address ?? old('address') }}">
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">شناسه اینستاگرام</label>
                <div class="input-group mb-3 dir-ltr">
                    <span class="input-group-text" id="instagram_id">@</span>
                    <input type="text" class="form-control dir-ltr" placeholder="اینستاگرام"
                           name="instagram_id"
                           aria-label="instagram" aria-describedby="instagram_id"
                           value="{{ $settings->instagram_id ??  old('instagram_id') }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">شناسه تلگرام</label>
                <div class="input-group mb-3 dir-ltr">
                    <span class="input-group-text" id="telegram_id">@</span>
                    <input type="text" class="form-control dir-ltr" placeholder="تلگرام"
                           name="telegram_id"
                           aria-label="telegram" aria-describedby="telegram_id"
                           value="{{ $settings->telegram_id ?? old('telegram_id') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-sm btn-success">ثبت</button>
        </div>
    </form>

@endsection
