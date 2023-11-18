@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['زمان بندی ها', Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('Y/m/d'), 'نوبت ها']])
@endsection

@section('content')

    <h3 class="mb-4">نوبت ها</h3>

    <h4 class="mb-4">
        {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('%A, %d %B %Y') }}
    </h4>

    <div class="row justify-content-end mb-4">
        <div class="dir-ltr text-left">
            <a href="{{ route('admin.open-dates.index') }}" class="btn btn-sm btn-primary dir-ltr text-left">
                <i class="fa-solid fa-chevron-left"></i>
                بازگشت
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
{{--            <th>تاریخ</th>--}}
            <th>ساعت</th>
            <th>وضعیت دسترسی</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($times as $key => $time)
            <tr>
                <td class="">{{ $loop->iteration }}</td>
{{--                <td class="text-center">{{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($time->date))->format('Y-m-d') }}</td>--}}
                <td class="">{!! $time->end_time_text . ' - ' . $time->start_time_text!!}</td>
                <td class="">{!! $time->is_available_text !!}</td>
                <td class="">
                    {!! $time->status_text !!}
                </td>
                <td>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
