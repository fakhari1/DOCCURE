<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>پیشخوان کاربر</title>

    <link rel="shortcut icon" href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/assets/img/favicon.png">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    {{--    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/morris.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/public.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" referrerpolicy="no-referrer"/>

    @yield('head')
</head>
<body>

<div class="main-wrapper">

    @include('Dashboard::user.sections.header')

    @include('Dashboard::user.sections.sidebar')


    <div class="page-wrapper" style="min-height: 567px;">
        <div class="content container-fluid">

            <div class="page-header">
                @yield('page-header')
            </div>

            @include('Common::partials.alerts')

            @yield('content')
        </div>
    </div>

</div>
<script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/js/jquery-migrate-1.2.1.min.js") }}" type="text/javascript"></script>

{{--<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>--}}
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
{{--<script src="{{ asset('assets/js/raphael.min.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('assets/js/morris.min.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('assets/js/chart.morris.js') }}" type="text/javascript"></script>--}}
<script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/fontawesome.min.js') }}"
        referrerpolicy="no-referrer"></script>
@yield('script')
<div class="sidebar-overlay"></div>
</body>
</html>
