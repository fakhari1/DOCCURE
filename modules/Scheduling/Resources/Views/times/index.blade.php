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
            <th class="text-center">ساعت</th>
            <th class="text-center">وضعیت دسترسی</th>
            <th class="text-center">وضعیت</th>
            <th class="text-center">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($times as $key => $time)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                {{--                <td class="text-center">{{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($time->date))->format('Y-m-d') }}</td>--}}
                <td class="text-center">{!! $time->end_time_text . ' - ' . $time->start_time_text!!}</td>
                <td class="text-center">{!! $time->is_available_text !!}</td>
                <td class="text-center">
                    {!! $time->status_text !!}
                </td>
                <td class="text-center">
                    <form
                        action="{{ route('admin.open-dates.times.update_status', $time) }}"
                        method="post">
                        @csrf
                        <button type="submit"
                                class="btn btn-sm @if($time->isDisabled()) btn-success @else btn-danger @endif d-flex justify-content-between align-items-center mx-auto"
                                style="width: 85px;">
                            @if($time->isDisabled())
                                <i class="fa-solid fa-check"></i>
                                <span>در دسترس</span>
                            @else
                                <i class="fa-solid fa-close"></i>
                                <span>لغو/تعطیل</span>
                            @endif
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
