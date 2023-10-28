@extends('Front::layouts.master')

@section('header')
    <header class="header min-header">
        <div class="top-header min">
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
                        <ul>
                            <li>
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
                            </li>
                        </ul>
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
                        <a class="nav-link header-login" href="{{ route('login') }}">ورود به حساب کاربری</a>
                    </li>
                @endguest
                @auth
                    @if(auth()->user()->isAdmin())
                            <div class="btn-group">
                                <button type="button"
                                        style="border-radius: 0 7px 7px 0 !important; display: inline-block; width: 20px !important"
                                        class="btn btn-success dropdown-toggle dropdown-toggle-split text-white ps-3"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                                <button type="button" class="btn btn-success" style="border-radius: 7px 0 0 7px">
                                    <a class="nav-link header-login text-white" href="{{ route('admin.index') }}">پنل مدیریت</a>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">پروفایل کاربری</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item"
                                           style="text-align: center"
                                           onclick="document.querySelector('#logout_form').submit()"
                                           href="javascript:void(0)">
                                            خروج
                                        </a>
                                    </li>
                                </ul>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </div>
{{--                        <li class="nav-item">--}}


                                {{--                                <button type="button" class="btn btn-danger">--}}
                                {{--                                </button>--}}


{{--                        </li>--}}
                    @else
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{ route('panel.index') }}">پنل کاربری</a>
                        </li>
                    @endif
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
