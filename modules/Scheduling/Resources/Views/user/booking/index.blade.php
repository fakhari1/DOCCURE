@extends('Dashboard::user.layouts.master')

@section('head')
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/swiper-bundle.min.css') }}"
    />

    <style>
        .swiper {
            width: 100%;
            height: 100px;
        }

        .swiper-button-next {
            background: white;
            height: 80%;
            padding: 2rem 1rem;
            border-radius: 0 10px 10px 0;
            left: 0 !important;
            margin: auto 0;
            top: 0;
            bottom: 0;
            border: 1px solid #f4f4f4;
        }

        .swiper-button-prev {
            background: white;
            height: 80%;
            padding: 2rem 1rem;
            border-radius: 10px 0 0 10px;
            right: 0 !important;
            margin: auto 0;
            top: 0;
            bottom: 0;
            border: 1px solid #f4f4f4;
        }

        .swiper-slide {
            width: 308px !important;
            height: 100px !important;
            padding: 1.3rem !important;
            background-color: #f9fdff;
            border: 1px solid #b3b6b9;
            border-radius: 10px;
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide-active {
            background-color: #c3dbff;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')

    <h3 class="mb-4">رزرو نوبت</h3>

    <div class="row mb-4">
        <div class="col-12">
            <h4 class="mb-4">
                <span>امروز</span>
                <span>{{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::now())->format('%A, %d %B %Y') }}</span>
            </h4>
        </div>
    </div>


{{--    <div class="row mb-4 justify-content-end">--}}
{{--        <div class="col-3 ">--}}
{{--            <div class="input-group mb-4 dir-ltr">--}}
{{--                <span class="input-group-text" id="basic-addon1">--}}
{{--                    <i class="fa-solid fa-calendar"></i>--}}
{{--                </span>--}}
{{--                <select name="" id="" class="form-select form-select-sm">--}}
{{--                    <option selected disabled>انتخاب...</option>--}}
{{--                    @foreach($dates as $key=> $date)--}}
{{--                        <option value="{{ $date->id }}" style="font-family: IRANSansWeb(FaNum)">--}}
{{--                            {{ Morilog\Jalali\Jalalian::fromCarbon(\Carbon\Carbon::parse($date->date))->format('Y/m/d') }}--}}
{{--                        </option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}


{{--        </div>--}}

{{--    </div>--}}


    <div class="row mb-4">
        <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                 aria-controls="swiper-wrapper-90cd11105532ffb41" aria-disabled="false"></div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                 aria-label="Previous slide"
                 aria-controls="swiper-wrapper-90cd11105532ffb41" aria-disabled="true"></div>
            <div class="swiper-wrapper" id="swiper-wrapper-a4338456106cb16d6" aria-live="polite"
                 style="transition-duration: 0ms; transform: translate3d(0, 0, 0); transition-delay: 0ms;">
                @foreach($dates as $key => $date)
                    <button class="swiper-slide cursor-pointer @if($date->isHoliday()) bg-danger-light @endif"
                            @if($date->isHoliday())
                                disabled
                            @endif
                            id="{{ $date->id }}"
                            data-date="{{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('%A %d %B %Y') }}"
                            data-url="{{ route('admin.open-dates.times.get-date-times', $date->id) }}"
                            role="group"
                            aria-label="{{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('Y/m/d') }}">
                        {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($date->date))->format('%A %d %B %Y') }}
                    </button>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="times w-100 border border-1 rounded p-3">
            <div class="row flex-wrap times-container">
                <div class="row">
                    <div class="col-12" id="month-container" style="font-family: IRANSansWeb(FaNum)">
                        <h3>{{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($dates->first()->date))->format('%A %d %B %Y') }}</h3>
                    </div>
                </div>
                @foreach($dates->first()->openTimes as $key => $time)
                    <div class="col-2 mb-3">
                        <a href="{{ route('user.bookings.store', $time) }}"
                           class="badge @if($time->is_available) bg-success @elseif($time->is_disabled) border border-1 border-danger text-danger bg-white @else bg-danger @endif d-flex justify-content-between align-items-center"
                           id="time_{{ $time->id }}"

                           onclick="event.preventDefault(); document.getElementById('form_time_{{ $time->id }}').submit()"
                           style="min-width: 120px; @if(!$time->is_available or $time->is_disabled) pointer-events: none; @endif">
                            <i class="fa-solid fa-clock"></i>
                            <span>{{ $time->start_time . '-' . $time->end_time }}</span>
                        </a>

                        <form action="{{ route('user.bookings.store', $time) }}" method="post"
                              id="form_time_{{ $time->id }}">
                            @csrf
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <script>
        let selectedElem = null;

        $(document).ready(function () {
            let swiper = new Swiper(".mySwiper", {
                loop: false,
                slidesPerView: 3.5,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });


            $('.swiper-slide').on('click', function (e) {
                let date = $(this).data('date');

                selectedElem = this;

                // $('.swiper-slide').removeClass('swiper-slide-active')
                // $(this).addClass('swiper-slide-active');

                getSelectedDateTimes($(this).attr('id'), date);
            });


        });

        function getSelectedDateTimes(elem_id, date) {
            let url = $('#' + elem_id).data('url');

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {
                    let month = `<span>${date}</span>`;
                    let cols = `<div class="row"><div class="col-12"><h3>${month}</h3></div></div>`;

                    $('.times-container').html('');

                    res.data.forEach((time) => {
                        let className = '';
                        let style = '';

                        if (time.is_available) {
                            className = ' bg-success ';
                        } else if (time.has_appointment) {
                            className = ' bg-danger ';
                            style = ` pointer-events: none; `;
                        } else {
                            className = ' bg-white text-danger border border-1 border-danger ';
                            style = ` pointer-events: none; `;
                        }


                        cols += `<div class="col-2 mb-3">
                                <a href="/dashboard/user/times/${time.id}/bookings/store" class="badge ` + className + ` d-flex justify-content-between align-items-center"
                                      id="time_${time.id}"
                                      style="min-width: 120px;` + style  + `">
                                    <i class="fa-solid fa-clock"></i>
                                    <span>
                                        ${time.start_time} - ${time.end_time}
                                    </span>
                                </a>
                                <form action="/dashboard/user/times/${time.id}/bookings/store" method="post" id="form_time_${time.id}">
                                    @csrf
                        </form>
                    </div>`
                    });

                    $('.times-container').html(cols);

                    $('.swiper-slide').removeClass('swiper-slide-active');

                    $(selectedElem).addClass('swiper-slide-active');

                }
            });
        }
    </script>

@endsection

