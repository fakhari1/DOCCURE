@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['زمان بندی ها']])
@endsection

@section('content')

    <h3 class="mb-4">زمان بندی ها</h3>

    <div class="row justify-content-start mb-4">
        <div>
            <a href="{{ route('admin.open-dates.create') }}" class="btn btn-sm btn-success">
                <i class="fa-solid fa-plus"></i>
                جدید
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th class="text-center">تاریخ</th>
            <th>نوبت ها</th>
            <th>نوبت خالی</th>
            <th class="text-center">زمان نوبت</th>
            <th class="text-center">صبح</th>
            <th class="text-center">عصر</th>
            <th>تعطیل</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        @if(!count($dates))
            <tr>
                <td colspan="10" class="text-center">آیتمی در سیستم ثبت نشده است.</td>
            </tr>
        @else
            @foreach($dates as $key => $date)
                <tr disabled="disabled">
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">
                    <span class="badge bg-transparent text-dark border border-1 border-primary"
                          style="font-size: 14px !important;">
                        {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('Y/m/d') }}
                    </span>
                    </td>
                    <td class="text-center">{{ $date->openTimes()->count() }}</td>
                    <td class="text-center">{{ $date->getAvailableTimesCount() }}</td>
                    <td class="text-center">{{ $date->duration }} دقیقه</td>
                    <td class="text-center dir-ltr">
                        @if($date->morning_start_time && $date->morning_end_time)
                            <span
                                class="badge bg-success">{{ Carbon\Carbon::parse($date->morning_start_time)->format('H:i') }}</span>
                            -
                            <span
                                class="badge bg-danger">{{ Carbon\Carbon::parse($date->morning_end_time)->format('H:i') }}</span>
                        @else
                            -
                        @endif

                    </td>
                    <td class="text-center dir-ltr">
                        @if($date->evening_start_time && $date->evening_end_time)
                            <span
                                class="badge bg-success">{{ Carbon\Carbon::parse($date->evening_start_time)->format('H:i') }}</span>
                            -
                            <span
                                class="badge bg-danger">{{ Carbon\Carbon::parse($date->evening_end_time)->format('H:i') }}</span>
                        @else
                            -
                        @endif
                    </td>
                    <td class="text-center">
                        @if($date->is_holiday)
                            <span class="text-success fw-bolder">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        @else
                            <span class="text-danger fw-bolder">
                            -
                        </span>
                        @endif
                    </td>
                    <td class="text-center">
                        {!! $date->status_text !!}
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button"
                                    @if(Carbon\Carbon::parse($date->date)->lessThan(Carbon\Carbon::now()->format('Y-m-d')))
                                        disabled="disabled"
                                    @endif
                                    style="border-radius: 0 7px 7px 0 !important; display: inline-block; width: 20px !important"
                                    class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split pe-3 dir-ltr"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                {{--                            <i class="fa-solid fa-chevron-right"></i>--}}
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-primary"
                                    style="border-radius: 7px 0 0 7px">
                                <a href="{{ route('admin.open-dates.times.index', $date) }}"
                                   class="w-100 text-white d-flex align-items-center justify-content-between">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </button>

                            <ul class="dropdown-menu">
                                <li class="">
                                    <a class="dropdown-item mb-0 text-warning"
                                       href="{{ route('admin.open-dates.edit', $date) }}">
                                        <i class="fa-solid fa-pen"></i>
                                        <span>ویرایش</span>
                                    </a>
                                </li>

                                {{--                            <li class="border-bottom">--}}
                                {{--                                <a class="dropdown-item mb-0 text-warning"--}}
                                {{--                                   href="{{ route('admin.open-dates.edit', $date) }}">--}}
                                {{--                                    <i class="fa-solid fa-pen"></i>--}}
                                {{--                                    <span>ویرایش</span>--}}
                                {{--                                </a>--}}
                                {{--                            </li>--}}
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection
