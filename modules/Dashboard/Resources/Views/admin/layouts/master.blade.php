<!DOCTYPE html>
<html lang="en" style="transform: none;">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>پیشخوان پزشک</title>

    <link href="https://atiyehahmadi.ir/doccure/pediatric-rtl/assets/img/favicon.png" rel="icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/public.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body style="transform: none;">

<div class="main-wrapper" style="transform: none;">


    @yield('breadcrumb')


    <div class="content" style="transform: none; min-height: 14px;">
        <div class="container-fluid" style="transform: none;">
            <div class="row" style="transform: none;">

                @include('Dashboard::admin.sections.sidebar')

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Dashboard::admin.sections.footer')
</div>

<script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/js/jquery-migrate-1.2.1.min.js") }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/ResizeSensor.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/theia-sticky-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/circle-progress.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="sidebar-overlay"></div>
</body>
</html>
