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
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['زمان بندی ها', Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('Y-m-d'), 'ویرایش']])
@endsection

@section('content')

    <h3 class="mb-4">
        ویرایش زمان بندی
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
                                    <option value="{{ $hour }}" @if($hour == '08:00') selected @endif>
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
                                    name="evening_start_time">
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
                                    name="evening_end_time">
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
                    <label for="">
                        <span class="text-danger">*</span>
                        زمان هر نوبت
                    </label>
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
                    <select type="text" class="form-control form-control-sm form-select" name="status_id">
                        @foreach($statuses as $key => $status)
                            <option value="{{ $status->id }}">
                                @lang($status->name)
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

        let startDate, endDate, holidays, dates = [];

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
                document.getElementById('start_date_view').value = getJalaliDateWithGeneralFormat(getDateDetails(startDate));
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
                    getJalaliDateWithGeneralFormat(getDateDetails(endDate))
            }
        });

        holidays = $('#holidays_view').persianDatepicker({
            initialValue: false,
            altField: '#holidays',
            format: 'YYYY/MM/DD',
            maxDate: new persianDate().add('month', 3).valueOf(),
            minDate: new persianDate().valueOf(),
            onSelect: function () {
                addingHolidays(holidays);
            }
        });

        function createBadgeTag(date) {
            console.log('create badge date', date);
            return `<span class="badge bg-danger d-inline-block ms-1 mb-1 d-flex justify-content-between align-items-center flex-nowrap ms-2" style="width: 85px">
                        <i
                            class="fa-solid fa-close text-danger p-1 rounded-pill bg-white cursor-pointer"
                            id=${date.text} onclick="removeHoliday('${date.text}')"></i>
                        ${date.text}
                            <input type="hidden" name="holidays[]" value="${date.unix}">
                       </span>`;
        }

        function addingHolidays(hd) {
            let date = getDateDetails(hd);
            let formattedDate = getJalaliDateWithGeneralFormat(date);
            let unixDate = date.unixDate;
            let obj = {text: formattedDate, unix: unixDate}
            let found = dates.find(d => d.text === obj.text)

            if (found) {
                dates = dates.filter(function (d) {
                    return d.text !== obj.text
                })
            } else {
                dates.push(obj);
            }

            rerenderHolidays();
        }

        function rerenderHolidays() {

            document.getElementById('holidays_container').innerHTML = '';

            dates.forEach((date) => {
                document.getElementById('holidays_container').innerHTML += createBadgeTag(date)
            })

            console.log('rerender done');
        }

        function getJalaliDateWithGeneralFormat(date) {
            let year = date.year;
            let month = date.month;
            let day = date.date;

            if (day < 10) day = '0' + day;
            if (month < 10) month = '0' + month;
            return year + '/' + month + '/' + day;
        }

        function removeHoliday(date) {
            dates = dates.filter(function (d) {
                return d.text !== date;
            });
            rerenderHolidays()
        }

        function getDateDetails(date) {
            return date.getState().selected;
        }
    </script>
@endsection
