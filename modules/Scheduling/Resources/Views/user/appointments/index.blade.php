@extends('Dashboard::user.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['زمان بندی ها']])
@endsection

@section('content')

    <h3 class="mb-4">نوبت های رزرو شده</h3>

    <div class="row justify-content-start mb-4">
        <div>
            <a href="{{ route('user.bookings.index') }}" class="btn btn-sm btn-success">
                <i class="fa-solid fa-plus"></i>
                رزرو نوبت
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th class="text-center">تاریخ</th>
            <th class="text-center">زمان نوبت</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        @if(!count($appointments))
            <tr>
                <td colspan="10" class="text-center">داده در سیستم ثبت نشده است.</td>
            </tr>
        @else
            @foreach($appointments as $key => $appointment)
                <tr disabled="disabled">
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">
                    <span class="badge bg-transparent text-dark border border-1 border-primary"
                          style="font-size: 14px !important;">
                        {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($appointment->date->date))->format('Y/m/d') }}
                    </span>
                    </td>
                    <td class="text-center dir-ltr">
                        @if($appointment->time->morning_start_time && $appointment->time->morning_end_time)
                            <div class="d-block my-3">
                                <span
                                    class="badge bg-success">{{ Carbon\Carbon::parse($appointment->time->morning_start_time)->format('H:i') }}</span>
                                -
                                <span
                                    class="badge bg-danger">{{ Carbon\Carbon::parse($appointment->time->morning_end_time)->format('H:i') }}</span>
                            </div>
                        @elseif($appointment->time->evening_start_time && $appointment->time->evening_end_time)
                            <div class="d-block my-3">
                                <span
                                    class="badge bg-success">{{ Carbon\Carbon::parse($appointment->time->evening_start_time)->format('H:i') }}</span>
                                -
                                <span
                                    class="badge bg-danger">{{ Carbon\Carbon::parse($appointment->time->evening_end_time)->format('H:i') }}</span>
                            </div>
                        @else
                            -
                        @endif

                    </td>
                    <td class="text-center">
                        {!! $appointment->status_text !!}
                    </td>
                    <td>
                        <div class="d-block">
                            <button class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-close"></i>
                                <span>لغو</span>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection
