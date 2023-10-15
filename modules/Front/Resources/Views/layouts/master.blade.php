<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>
        @yield('title')
    </title>

    @yield('head')

</head>

<body>
<div class="main-wrapper">

    @yield('header')

    @yield('content')

    @include('Front::sections.footer')
</div>

<div class="sidebar-overlay"></div>

@yield('script')

</body>

</html>
