@extends('Front::layouts.master')

@section('header')
    <header class="header min-header">
        <div class="top-header min">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-8">
                        <div class="right">
                            <ul>
                                @if(count($settings->landline_phones))
                                    <li>
                                        <span>شماره (های) تماس:</span>
                                        @foreach($settings->landline_phones as $key => $phone)
                                            | <span>{{ $phone }}</span>
                                        @endforeach
                                    </li>
                                @endif
                                @if($settings->address != '' or !$settings->address != null)
                                    <li>
                                        <span>آدرس:</span>
                                        <span>{{ $settings->address }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="left social-icon">
                            <ul class="" style="list-style: none !important;">
                                @if($settings->instagram_id)
                                    <li class="px-2">
                                        <a href="https://instagram.com/{{ $settings->instagram_id }}" title="instagram"
                                           class="text-white"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                @endif
                                @if($settings->instagram_id)
                                    <li class="px-2">
                                        <a href="https://telegram.me/{{ $settings->telegram_id }}" title="telegram"
                                           class="text-white"><i
                                                class="fab fa-telegram"></i></a>
                                    </li>
                                @endif
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
                    <img src="{{ asset('assets/images/logo-white.png')}}" class="img-fluid" alt="Logo">
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
                        <a href="/">خانه</a>
                    </li>

                    @auth
                        @if(!auth()->user()->isAdmin())
                            <li>
                                <a class="text-white" href="/reserve">دریافت نوبت</a>
                            </li>
                        @endif
                    @endauth
                    <li>
                        <a class="text-white" href="javascript:void(0)">تماس با ما</a>
                    </li>
                    <li>
                        <a class="text-white" href="javascript:void(0)">درباره پزشک</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">

                @guest
                    <li class="nav-item">
                        <a class="nav-link header-login" href="{{ route('auth.show-form') }}">ورود به حساب کاربری</a>
                    </li>
                @endguest
                @auth
                    <div class="btn-group">
                        <button type="button"
                                style="border-radius: 0 7px 7px 0 !important; display: inline-block; width: 20px !important"
                                class="btn btn-success dropdown-toggle dropdown-toggle-split pe-3 dir-ltr"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        @if(auth()->user()->isAdmin())

                            <button type="button" class="btn btn-success" style="border-radius: 7px 0 0 7px">
                                <a class="nav-link header-login text-white" href="{{ route('dashboard.admin.index') }}">
                                    پنل مدیریت
                                </a>
                            </button>

                            <ul class="dropdown-menu">
                                <li class="border-bottom"><a class="dropdown-item mb-0"
                                                             href="{{ route('users.profile') }}">پروفایل مدیریت</a></li>

                                <li>
                                    <a
                                        href="{{ route('logout') }}"
                                        class="dropdown-item"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout_form').submit()"
                                    >
                                        خروج
                                    </a>
                                    <form action="{{ route('logout') }}"
                                          method="POST"
                                          id="logout_form">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        @else
                            <button type="button" class="btn btn-success" style="border-radius: 7px 0 0 7px">
                                <a class="nav-link header-login text-white" href="{{ route('dashboard.user.index') }}">پنل
                                    کاربری</a>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('users.profile') }}">پروفایل کابری</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a
                                        href="{{ route('logout') }}"
                                        class="dropdown-item"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout_form').submit()"
                                    >
                                        خروج
                                    </a>
                                    <form action="{{ route('logout') }}"
                                          method="POST"
                                          id="logout_form">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        @endif
                    </div>

                @endauth
            </ul>
        </nav>
    </header>
@endsection

@section('head')
    <style>
        .dropdown-menu > li {
            width: 100% !important;
            display: block !important;
            padding-left: 0 !important;
        }

        .dropdown-menu li:last-child a {
            border-top: 0 !important;
        }

        .dropdown-menu li a {
            text-align: center !important;
        }
    </style>
@endsection
