@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['زمان بندی ها', 'ایجاد زمان بندی']])
@endsection

@section('content')

    <h3 class="mb-4">
        ایجاد زمان بندی
    </h3>

    <div class="row justify-content-start mb-4">
        <div class="text-left dir-ltr">
            <a href="{{ route('admin.open-dates.index') }}" class="btn btn-sm btn-primary">
                <i class="fa-solid fa-chevron-left"></i>
                بازگشت
            </a>
        </div>
    </div>
    <form action="{{ route('admin.open-dates.store') }}" method="post">
        @csrf

        <div class="row mb-4">
            <h4>
                سال
                {{ jdate()->getYear() }}
            </h4>
        </div>

        <div class="row mb-4">
            @foreach(get_jalali_months() as $key => $month)
                <div class="col-md-6 col-12 mw-200-px">
                    <div class="form-check form-check-inline m-r-10 dir-rtl">

                        <input class="form-check-input"
                               style="float: right !important;"
                               type="radio"
                               name="month_id[]"
                               value="{{ $key }}"
                               @if(!array_key_exists($key, get_remaining_jalali_months()))
                                   disabled
                               @endif

                               @if(jdate()->getMonth() == $key)
                                   checked
                            @endif
                        >

                        <label class="form-check-label me-4">
                            {{ $key }} - {{ $month }}
                        </label>

                    </div>
                </div>
            @endforeach
        </div>


        <div class="row mb-4">

            <div class="col-12 col-md-6">

                <div class="form-group">
                    <label for="">
                        شیفت صبح:
                    </label>
                    <div class="row">
                        <div class="col-md-5">
                            <select type="text" name="morning_start_time"
                                    class="form-control form-control-sm form-select">
                                <option value="null">تعطیل</option>
                                @foreach(get_ceil_hours() as $key => $hour)
                                    <option value="{{ $hour }}" @if($hour == '8:00') selected @endif>
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
                                    <option value="{{ $hour }}" @if($hour == '13:00') selected @endif>
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
                        شیفت عصر:
                    </label>
                    <div class="row">
                        <div class="col-md-5">
                            <select type="text" class="form-control form-control-sm form-select">
                                <option value="null">تعطیل</option>
                                @foreach(get_ceil_hours() as $key => $hour)
                                    <option value="{{ $hour }}" @if($hour == '16:00') selected @endif>
                                        {{ $hour }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1">
                            تا
                        </div>
                        <div class="col-md-5">
                            <select type="text" class="form-control form-control-sm form-select">
                                <option value="null">تعطیل</option>
                                @foreach(get_ceil_hours() as $key => $hour)
                                    <option value="{{ $hour }}" @if($hour == '21:00') selected @endif>
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
                    <label for="">زمان هر نوبت</label>
                    <select type="text" class="form-control form-control-sm form-select">
                        <option disabled selected>
                            انتخاب کنید...
                        </option>
                        @foreach(get_appointment_durations() as $key => $duration)
                            <option value="{{ $duration }}">
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
                    <select type="text" class="form-control form-control-sm form-select">
                        @foreach($statuses as $key => $status)
                            <option value="{{ $status->id }}">
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


            </div>

        </div>

        <div class="row-mb-4">

            <div class="col-12 col-md-6">
                <button type="submit" class="btn btn-sm btn-success">ثبت</button>
            </div>

        </div>


    </form>

@endsection

@section('script')
    <script>
        let monthCardElems = $('.month-card');

        monthCardElems.on('click', function (e) {
            e.preventDefault();

            monthCardElems.each((idx, obj) => {
                $(obj).removeClass('card-selected');
            })

            $(this).toggleClass('card-selected');
        })

    </script>
@endsection
