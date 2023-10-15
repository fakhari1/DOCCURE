<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> داک‌کیور - دشبرد</title>

    <link rel="shortcut icon" href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/assets/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="main-wrapper">

    @include('Dashboard::admin.sections.header')


    @include('Dashboard::admin.sections.sidebar')


    <div class="page-wrapper" style="min-height: 567px;">
        <div class="content container-fluid">

            <div class="page-header">
                @yield('page-header')
            </div>

            @yield('content')
        </div>
    </div>

</div>

<script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/raphael.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/chart.morris.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/admin/script.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="sidebar-overlay"></div></body></html>
