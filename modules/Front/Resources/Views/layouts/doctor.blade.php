@extends('Front::layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.4/sweetalert2.min.css" />
    @yield('sub_head')
@endsection

@section('header')
    <header class="header">
        <div class="top-header">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="left">
                            <ul>
                                <li>
                                    <span>شماره تماس:</span>
                                    <span>03153231111</span>
                                </li>
                                <li>
                                    <span>آدرس:</span>
                                    <span>واحد 1، طبقه 1، ساختمان پزشکان، خیابان شریعتی، اصفهان</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="right social-icon">
                            <ul class="">
                                <li class="px-2">
                                    <a href="javascript:void(0)" title="instagram"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li class="px-2">
                                    <a href="javascript:void(0)" title="facebook"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li class="px-2">
                                    <a href="javascript:void(0)" title="whatsapp"><i
                                            class="fab fa-whatsapp"></i></a>
                                </li>
                                <li class="px-2">
                                    <a href="javascript:void(0)" title="telegram"><i
                                            class="fab fa-telegram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0)" title="mobile button">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                </a>
                <a href="javascript:void(0)" class="navbar-brand logo">
                    <img src="{{ asset('images/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="javascript:void(0)" class="menu-logo">
                        <img src="{{ asset('images/logo.png')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0)" title="menu close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="active">
                        <a href="index.html">خانه</a>
                    </li>
                    <li>
                        <a href="reserve.html">دریافت نوبت</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">تماس با ما</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">درباره پزشک</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{asset('images/doctor/doctor-thumb.jpg')}}" width="31"
                                 alt="User Image">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('images/doctor/doctor-thumb.jpg')}}" alt="User Image"
                                     class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>نام نام‌خانوادگی</h6>
                                <p class="text-muted mb-0">پزشک</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="javascript:void(0)">داشبورد</a>
                        <a class="dropdown-item" href="javascript:void(0)">خروج</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
@endsection

@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">@yield('title')</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-3">

            <div class="col-md-5 col-lg-4 col-xl-3 mt-3">
                <div class="text-center">
                    <div class="card mb-0">
                        <img src="{{asset('images/doctor/doctor-thumb.jpg')}}" alt="User Image" class="img-fluid">
                        <div class="card-body">
                            <h4 class="card-title">پزشک جرمن دیلانگ</h4>
                            <p class="card-text">BDS ، MDS - جراحی دهان و فک و صورت</p>
                        </div>
                    </div>
                </div>

                <div class="">
                    <a class="list-group-item list-group-item-action" href="{{ url('doctor/dashboard') }}">
                        <i class="fas fa-columns"></i>
                        <span>داشبورد</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ url('doctor/schedule') }}">
                        <i class="fas fa-hourglass-start"></i>
                        <span>زمان‌بندی</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ url('doctor/appointments') }}">
                        <i class="fas fa-list-check"></i>
                        <span>نوبت‌ها</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ url('doctor/profile') }}">
                        <i class="fas fa-user-cog"></i>
                        <span>تنظیمات پروفایل</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>خروج</span>
                    </a>
                </div>
            </div>

            <div class="col-md-7 col-lg-8 col-xl-9 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        @yield('sub_content')
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.4/sweetalert2.all.min.js"
            integrity="sha256-qtyU+b249rw/5PQ1KXGRtxjlgg6hfU2EK50YOlc0n50="
            crossorigin="anonymous">
    </script>
    @yield('sub_script')
@endsection
