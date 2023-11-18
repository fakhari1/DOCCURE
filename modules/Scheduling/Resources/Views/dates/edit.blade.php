@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['زمان بندی ها', Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('Y/m/d'), 'ویرایش']])
@endsection

@section('content')

    <h3 class="mb-4">
        ویرایش زمان بندی تاریخ
        {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format(('%A, %d %B %Y')) }}
    </h3>

    <div class="row justify-content-start mb-4">
        <div class="text-left dir-ltr">
            <a href="{{ route('admin.open-dates.index') }}" class="btn btn-sm btn-primary">
                <i class="fa-solid fa-chevron-left"></i>
                بازگشت
            </a>
        </div>
    </div>
    <form action="{{ route('admin.open-dates.update', $date) }}" method="post">
        @csrf
        @method('patch')
        <div class="row mb-4">

            <div class="col-12 col-md-6">

                <div class="form-group">
                    <label for="">
                        شیفت صبح
                    </label>
                    <div class="row">
                        <div class="col-md-5">
                            <select type="text" name="morning_start_time"
                                    class="form-control form-control-sm form-select">
                                <option value="null">تعطیل</option>
                                @foreach(get_ceil_hours() as $key => $hour)
                                    <option value="{{ $hour }}"
                                            @if($date->morning_start_time && Carbon\Carbon::parse($date->morning_start_time)->format('H:i') == $hour) selected @endif>
                                        {{ $hour }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1">
                            تا
                        </div>
                        <div class="col-md-5">
                            <select type="text" name="morning_end_time"
                                    class="form-control form-control-sm form-select">
                                <option value="null">تعطیل</option>
                                @foreach(get_ceil_hours() as $key => $hour)
                                    <option value="{{ $hour }}"
                                            @if($date->morning_end_time && Carbon\Carbon::parse($date->morning_end_time)->format('H:i') == $hour) selected @endif>
                                        {{ $hour }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">

                <div class="form-group">
                    <label for="">
                        شیفت عصر
                    </label>
                    <div class="row">
                        <div class="col-md-5">
                            <select type="text" class="form-control form-control-sm form-select"
                                    name="evening_start_time">
                                <option value="null">تعطیل</option>
                                @foreach(get_ceil_hours() as $key => $hour)
                                    <option value="{{ $hour }}"
                                            @if($date->evening_start_time && Carbon\Carbon::parse($date->evening_start_time)->format('H:i') == $hour) selected @endif>
                                        {{ $hour }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1">
                            تا
                        </div>
                        <div class="col-md-5">
                            <select type="text" class="form-control form-control-sm form-select"
                                    name="evening_end_time">
                                <option value="null">تعطیل</option>
                                @foreach(get_ceil_hours() as $key => $hour)
                                    <option value="{{ $hour }}"
                                            @if($date->evening_end_time && Carbon\Carbon::parse($date->evening_end_time)->format('H:i') == $hour) selected @endif>
                                        {{ $hour }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mb-4">

            <div class="col-12 col-md-6">

                <div class="form-group">
                    <label for="">
                        <span class="text-danger">*</span>
                        زمان هر نوبت
                    </label>
                    <select type="text" class="form-control form-control-sm form-select" name="duration">
                        <option disabled selected>
                            انتخاب کنید...
                        </option>
                        @foreach(get_appointment_durations() as $key => $duration)
                            <option value="{{ $duration }}" @if($date->duration == $duration) selected @endif>
                                {{ $duration }}
                                دقیقه
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-12 col-md-6">

                <div class="form-group">
                    <label for="">وضعیت</label>
                    <select type="text" class="form-control form-control-sm form-select" name="status_id">
                        @foreach($statuses as $key => $status)
                            <option value="{{ $status->id }}" @if($date->status_id == $status->id) selected @endif>
                                @lang($status->name)
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>

        <div class="row-mb-4">
            <div class="col-12 col-md-6">
                <button type="submit" class="btn btn-sm btn-warning">ویرایش</button>
            </div>
        </div>


    </form>

@endsection
