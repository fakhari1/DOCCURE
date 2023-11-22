@extends('Front::layouts.master')

@section('head')
    @yield('head')
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
                    <img src="{{ asset('assets/images/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="javascript:void(0)" class="menu-logo">
                        <img src="{{ asset('assets/images/logo.png')}}" class="img-fluid" alt="Logo">
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
                            <img class="rounded-circle" src="{{asset('assets/images/doctor/doctor-thumb.jpg')}}"
                                 width="31"
                                 alt="User Image">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('assets/images/doctor/doctor-thumb.jpg')}}" alt="User Image"
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
    <div class="content bg-white pb-4">
        <div class="container-fluid">
            @include('Common::partials.alerts')
            <div class="row justify-content-center">
                <div class="col-md-8 justify-content-center">
                    <div class="account-content d-flex justify-content-center">
                        <div class="row w-100">
                            <div class="col-md-7 col-lg-6 login-right">
                                <img src="{{ asset('assets/images/login-banner.png')}}" class="img-fluid" alt="Login">
                            </div>
                            <div class="col-md-12 col-lg-6 login-left">
                                @yield('sub_content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @yield('script')
@endsection
