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
            <th>وقت ها</th>
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
                <td class="text-center">{{ $date->openTimes->count() }}</td>
                <td class="text-center">0</td>
                <td class="text-center">{{ $date->duration }} دقیقه</td>
                <td class="text-center dir-ltr">{{ $date->morning_start_time ?? '-' }} - {{ $date->morning_end_time ?? '-' }}</td>
                <td class="text-center dir-ltr">{{ $date->evening_start_time ?? '-' }} - {{ $date->evening_end_time ?? '-' }}</td>
                <td class="text-center">
                    <div class="badge bg-success">
                        فعال
                    </div>
                </td>
                <td>

                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            انتخاب...
                        </button>
                        <ul class="dropdown-menu m-0 p-0">
                            <li class="dir-rtl text-right px-1 border-bottom">
                                <a href="" class="text-primary py-2 d-block">
                                    <i class="fa-solid fa-eye">
                                    </i>
                                    قرار های ملاقات
                                </a>
                            </li>
                            <li class="dir-rtl text-right px-1 border-bottom">
                                <a href="" class="text-warning py-2 d-block">
                                    <i class="fa-solid fa-pen"></i>
                                    ویرایش
                                </a>
                            </li>
                            <li class="dir-rtl text-right px-1 border-bottom">
                                <a href="" class="text-danger py-2 d-block">
                                    <i class="fa-solid fa-trash"></i>
                                    حذف
                                </a>
                            </li>
                        </ul>
                    </div>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
