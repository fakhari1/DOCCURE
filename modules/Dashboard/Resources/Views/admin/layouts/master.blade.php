<!DOCTYPE html>
<html lang="en" style="transform: none;">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>پیشخوان پزشک</title>

    <link href="https://atiyehahmadi.ir/doccure/pediatric-rtl/assets/img/favicon.png" rel="icon">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{--    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/all.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/public.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}

    @yield('style')
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
                                    @include('Common::partials.alerts')
                                    @include('Common::partials.sweetalert')
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
{{--<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>--}}
<script src="{{ asset('assets/js/ResizeSensor.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/theia-sticky-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/circle-progress.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/sweetalert2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"--}}
{{--        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"--}}
{{--        crossorigin="anonymous"></script>--}}

<div class="sidebar-overlay"></div>

@yield('script')
</body>
</html>
