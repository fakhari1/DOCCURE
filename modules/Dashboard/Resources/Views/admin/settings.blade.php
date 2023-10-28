@extends('Dashboard::admin.layouts.master')

@section('page-header')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">تنظیمات اصلی</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/index.html">پیشخوان</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:(0)">تنظیمات</a>
                </li>
                <li class="breadcrumb-item active">تنظیمات اصلی</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">تنظیمات اصلی</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.settings.general.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>نام وبسایت</label>
                            <input type="text" name="site_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>نام پزشک (یا نام مستعار)</label>
                            <input type="text" name="doctor_name" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label>شماره تلفن های ثابت</label>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">

                                    <input type="text" class="form-control mb-3" name="phones[landline]"
                                           placeholder="خط 1">
                                </div>

                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="phones[landline]"
                                           placeholder="خط 2">
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="phones[landline]"
                                           placeholder="خط 3">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">آدرس</label>
                            <textarea class="form-control" rows="10" style="resize: none"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">آیدی صفحه اینستاگرام</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" aria-label="instagram"
                                               aria-describedby="basic-addon1" style="direction: ltr !important;">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">آیدی کانال تلگرام</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="instagram"
                                               aria-label="telegram" aria-describedby="basic-addon2" style="direction: ltr !important;">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">@</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <label>Favicon</label>
                            <input type="file" class="form-control">
                            <small class="text-secondary">اندازه تصویر پیشنهادی <b>16px x 16px</b> or <b>32px x
                                    32px</b></small><br>
                            <small class="text-secondary">فرمت های پذیرفته شده: فقط png و ico</small>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
