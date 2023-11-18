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
                جدید</a>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>تاریخ</th>
            <th>وقت ملاقات</th>
            <th>وقت خالی</th>
            <th>مدت</th>
            <th>صبح</th>
            <th>عصر</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dates as $key => $date)
            <tr>
                <td class="text-center">{{ $date->id }}</td>
                <td class="text-center">{{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('Y-m-d') }}</td>
                <td class="text-center">{{ $date->times->count() }}</td>
                <td class="text-center">{{ $date->getAvailableAppointmentsCount() }}</td>
                <td class="text-center">{{ $date->duration }} دقیقه</td>
                <td class="text-center dir-ltr">{{ $date->morning_start_time ?? '-' }}
                    - {{ $date->morning_end_time ?? '-' }}</td>
                <td class="text-center dir-ltr">{{ $date->evening_start_time ?? '-' }}
                    - {{ $date->evening_end_time ?? '-' }}</td>
                <td class="text-center">
                    <div class="badge bg-success">
                        فعال
                    </div>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button"
                                style="border-radius: 0 7px 7px 0 !important; display: inline-block; width: 20px !important"
                                class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split pe-3 dir-ltr"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
{{--                            <i class="fa-solid fa-chevron-right"></i>--}}
                        </button>
                        <button type="button" class="btn btn-sm btn-primary" style="border-radius: 7px 0 0 7px">
                            <a href="" class="text-white">
                                <i class="fa-solid fa-eye"></i>
                                نوبت ها
                            </a>
                        </button>

                        <ul class="dropdown-menu">
                            <li class="border-bottom"><a class="dropdown-item mb-0" href="{{ route('users.profile') }}">پروفایل
                                    مدیریت</a></li>

                            <li>
                                <a
                                    href="{{ route('logout') }}"
                                    class="dropdown-item"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout_form').submit()"
                                >
                                    خروج
                                </a>
                                <form action="{{ route('logout') }}"
                                      method="POST"
                                      id="logout_form">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
