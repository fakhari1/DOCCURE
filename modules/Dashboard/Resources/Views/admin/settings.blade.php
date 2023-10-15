@extends('Dashboard::admin.layouts.master')

@section('page-header')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">تنظیمات کلی</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/index.html">داشبرد</a>
                </li>
                <li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
                <li class="breadcrumb-item active">تنظیمات کلی</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">کلی</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-group">
                            <label>نام وبسایت</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>لوگو وبسایت</label>
                            <input type="file" class="form-control">
                            <small class="text-secondary">اندازه تصویر پیشنهادی <b>150px x 150px</b></small>
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
