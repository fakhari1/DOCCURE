@extends('Dashboard::admin.layouts.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/persian-datepicker.css') }}">

    <style>
        .pwt-btn {
            direction: ltr !important;
        }
    </style>
@endsection

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

        {{--        <div class="row mb-4">--}}
        {{--            @foreach(get_jalali_months() as $key => $month)--}}
        {{--                <div class="col-md-6 col-12 mw-200-px">--}}
        {{--                    <div class="form-check form-check-inline m-r-10 dir-rtl">--}}

        {{--                        <input class="form-check-input"--}}
        {{--                               style="float: right !important;"--}}
        {{--                               type="radio"--}}
        {{--                               name="month_id[]"--}}
        {{--                               value="{{ $key }}"--}}
        {{--                               @if(!array_key_exists($key, get_remaining_jalali_months()))--}}
        {{--                                   disabled--}}
        {{--                               @endif--}}

        {{--                               @if(jdate()->getMonth() == $key)--}}
        {{--                                   checked--}}
        {{--                            @endif--}}
        {{--                        >--}}

        {{--                        <label class="form-check-label me-4">--}}
        {{--                            {{ $key }} - {{ $month }}--}}
        {{--                        </label>--}}

        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            @endforeach--}}
        {{--        </div>--}}

        <div class="row mb-4">
            <div class="col-12 col-md-4 mb-4">
                <div class="form-group">

                    <label for="" class="form-label">
                        از تاریخ
                    </label>
                    <input type="hidden" id="start_date" name="start_date">
                    <input type="text" name="" id="start_date_view" class="form-control form-control-sm">
                    <div id="start_date_inline"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">

                <div class="form-group">

                    <label for="" class="form-label">
                        تا تاریخ
                    </label>
                    <input type="hidden" id="end_date" name="end_date">
                    <input type="text" class="form-control form-control-sm" id="end_date_view">
                    <div id="end_date_inline"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="form-group">
                    <label for="" class="form-label">
                        روزهای تعطیل
                    </label>
                    <input type="text" class="form-control form-control-sm" id="holidays_view">
                    <input type="hidden" id="holidays" name="holidays">
                    {{--                            <div id="holidays_inline"></div>--}}
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">

            <div class="form-group">

                <label for="" class="for-label">

                    روزهای تعطیل انتخاب شده

                </label>

                <div id="holidays_container" class="d-flex">


                </div>
            </div>


        </div>

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
                        شیفت عصر
                    </label>
                    <div class="row">
                        <div class="col-md-5">
                            <select type="text" class="form-control form-control-sm form-select"
                                    name="evening_start_date">
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
                            <select type="text" class="form-control form-control-sm form-select"
                                    name="evening_end_date">
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
                    <select type="text" class="form-control form-control-sm form-select" name="duration">
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
    <script src="{{ asset('assets/js/persian-date.js') }}"></script>
    <script src="{{ asset('assets/js/persian-datepicker.js') }}"></script>


    <script>


        $(document).ready(function () {

            let monthCardElems = $('.month-card');

            monthCardElems.on('click', function (e) {
                e.preventDefault();

                monthCardElems.each((idx, obj) => {
                    $(obj).removeClass('card-selected');
                })

                $(this).toggleClass('card-selected');
            })

        })

        let startDate, endDate, holidays, holidaysArray = [];

        startDate = Date.now();
        endDate = startDate;

        document.getElementById('start_date_view').value = (new Date()).toLocaleDateString('fa-IR');
        document.getElementById('end_date_view').value = (new Date()).toLocaleDateString('fa-IR');

        startDate = $('#start_date_inline').persianDatepicker({
            inline: true,
            initialValue: true,
            altField: '#start_date',
            format: 'YYYY/MM/DD',
            toolbox: {
                calendarSwitch: {
                    enabled: false,
                },
            },
            maxDate: new persianDate().add('month', 3).valueOf(),
            minDate: new persianDate().valueOf(),
            onSelect: function (unix) {
                document.getElementById('start_date_view').value =
                    getJalaliDateWithGeneralFormat(
                        getDateObject(startDate).year,
                        getDateObject(startDate).month,
                        getDateObject(startDate).date
                    )
            }
        });

        endDate = $('#end_date_inline').persianDatepicker({
            inline: true,
            initialValue: true,
            altField: '#end_date',
            format: 'YYYY/MM/DD',
            toolbox: {
                calendarSwitch: {
                    enabled: false,
                },
            },
            maxDate: new persianDate().add('month', 3).valueOf(),
            minDate: new persianDate().valueOf(),
            onSelect: function (unix) {
                document.getElementById('end_date_view').value =
                    getJalaliDateWithGeneralFormat(
                        getDateObject(endDate).year,
                        getDateObject(endDate).month,
                        getDateObject(endDate).date
                    )
            }
        });

        function createBadgeTag(text) {
            return `<span class="badge bg-danger d-inline-block ms-2 mb-2 d-flex justify-content-between align-items-center flex-nowrap ms-2" style="width: 100px">
                        <i class="fa-solid fa-close text-danger p-1 rounded-pill bg-white cursor-pointer" id=${text} onclick="removeHoliday('${text}')"></i>
                        ${text}
                       </span>`;
        }

        holidays = $('#holidays_view').persianDatepicker({
            initialValue: false,
            altField: '#holidays',
            format: 'YYYY/MM/DD',
            maxDate: new persianDate().add('month', 3).valueOf(),
            minDate: new persianDate().valueOf(),
            onSelect: function () {
                addingHolidays();
            }
        });

        function addingHolidays() {
            let date = getJalaliDateWithGeneralFormat(
                getDateObject(holidays).year,
                getDateObject(holidays).month,
                getDateObject(holidays).date,
            );

            if (holidaysArray.indexOf(date) === -1) {
                holidaysArray.push(date);
            } else {
                holidaysArray.splice(holidaysArray.indexOf(date), 1);
            }

            rerenderHolidays();
        }

        function rerenderHolidays() {
            document.getElementById('holidays_container').innerHTML = '';

            holidaysArray.forEach((item) => {
                document.getElementById('holidays_container').innerHTML += createBadgeTag(item)
            })
        }

        function getJalaliDateWithGeneralFormat(year, month, day) {
            if (day < 10) day = '0' + day;
            if (month < 10) month = '0' + month;
            return year + '/' + month + '/' + day;
        }

        function getDateObject(object) {
            return object.getState().selected;
        }

        function removeHoliday(date) {
            holidaysArray.splice(holidaysArray.indexOf(date), 1);
            rerenderHolidays()
        }
    </script>
@endsection
