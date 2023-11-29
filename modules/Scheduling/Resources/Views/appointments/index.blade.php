@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['نوبت ها']])
@endsection

@section('content')

    <h3 class="mb-4">نوبت ها</h3>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th class="text-center">نام مراجع</th>
            <th class="text-center">کد ملی</th>
            <th class="text-center">شماره موبایل</th>
            <th class="text-center">تاریخ</th>
            <th class="text-center">ساعت</th>
            <th class="text-center">وضعیت</th>
        </tr>
        </thead>
        <tbody>
        @if(!count($appointments))
            <tr>
                <td colspan="10" class="text-center">
                    آیتمی برای نمایش وجود ندارد!
                </td>
            </tr>
        @else
            @foreach($appointments as $key => $app)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-center">
                        {{ $app->user->full_name }}
                    </td>
                    <td class="text-center">
                        {{ $app->user->national_code }}
                    </td>
                    <td class="text-center">
                        {{ $app->user->mobile }}
                    </td>
                    <td class="text-center">
                    <span class="badge bg-transparent text-dark border border-1 border-primary"
                          style="font-size: 14px !important;">
                        {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($app->date->date))->format('Y/m/d') }}
                    </span>
                    </td>
                    <td class="text-center">
                        {!! $app->time->end_time_text !!} - {!! $app->time->start_time_text !!}
                    </td>
                    <td class="text-center">
                        {!! $app->status_text !!}
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
