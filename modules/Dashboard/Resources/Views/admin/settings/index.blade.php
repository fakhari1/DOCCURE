@extends('Dashboard::admin.layouts.master')

@section('page-header')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title mb-4">تنظیمات اصلی</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="/admin">پیشخوان</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="cursor-pointer">تنظیمات</span>
                </li>
                <li class="breadcrumb-item active">
                    <a href="/admin/settings">تنظیمات اصلی</a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.settings.general.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>نام وبسایت</label>
                            <input type="text" name="site_name" class="form-control" value="{{ $settings->site_name ?? old('site_name') }}">
                        </div>

                        <div class="form-group">
                            <label>نام پزشک (یا نام مستعار)</label>
                            <input type="text" name="doctor_name" class="form-control" value="{{ $settings->doctor_name ?? old('doctor_name') }}">
                        </div>

                        <div class="form-group">
                            <label for="">تخصص، حیطه کاری:</label>
                            <input type="text" name="specialization" class="form-control" value="{{ $settings->specialization ?? old('specialization') }}">
                        </div>

                        <div class="form-group">
                            <label for="">توضیحات</label>
                            <input type="text" name="description" class="form-control" value="{{ $settings->description ?? old('description') }}">
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
                            <input class="form-control" type="text" name="address" value="{{ $settings->address ?? old('address') }}">
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="">شناسه اینستاگرام</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control dir-ltr" placeholder="اینستاگرام"
                                           name="instagram_id"
                                           aria-label="instagram" aria-describedby="instagram_id"
                                           value="{{ $settings->instagram_id ??  old('instagram_id') }}">
                                    <span class="input-group-text" id="instagram_id">@</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="">شناسه تلگرام</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control dir-ltr" placeholder="تلگرام"
                                           name="telegram_id"
                                           aria-label="telegram" aria-describedby="telegram_id"
                                           value="{{ $settings->telegram_id ?? old('telegram_id') }}">
                                    <span class="input-group-text" id="telegram_id">@</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-sm btn-success">ثبت</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
