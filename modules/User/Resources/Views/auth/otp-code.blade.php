@extends('User::auth.layouts.master')

@section('title','وارد کردن کد یکبار مصرف')

@section('sub_content')

    <div class="login-header mb-5">
        <h2 class="text-center">کد تایید یکبار مصرف</h2>
    </div>
    <form method="POST" action="{{ route('otps.check') }}">
        @csrf
        <div class="row mb-4">
            <div class="form-group form-focus">
                <input type="text" class="form-control p-4" name="verification_code" title="کد تایید"
                       style="direction: ltr !important; text-align: left !important;" maxlength="6">
                <label class="focus-label">کد تایید 6 رقمی</label>
            </div>
        </div>

        <input type="hidden" name="otp_token" value="{{ $token }}">

        <div class="row mb-4">
            <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">
                ادامه
            </button>
        </div>

        <div class="row mb-4">
            <div class="text-center mb-4">
                <span>زمان باقی مانده:</span>
                <span class="countdown">00:00</span>
            </div>
            <div class="d-none otps-retry mb-4 text-center">
                <a href="{{ route('otps.retry') }}"
                   class="btn btn-outline-success p-2 btn-otps-retry"
                >
                    ارسال مجدد کد تایید
                </a>

                <form action="{{ route('otps.retry') }}" method="post" id="form_retry_otp">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                </form>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>

        $(document).ready(function () {
            checkOtpExpired();

            let seconds = "{{ $seconds }}";
            let interval;

            if (seconds == 0)
                $('.otps-retry').removeClass('d-none');

            startTimer(seconds);

            function startTimer(duration) {
                let timer = duration, minutes, seconds;
                interval = setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $('.countdown').html(minutes + ":" + seconds);

                    if (--timer < 0) {
                        // timer = duration;
                        clearInterval(interval);
                        $('.otps-retry').removeClass('d-none');
                        $('.login-btn').addClass('disabled');
                    }
                }, 1000);
            }

            // $('.btn-otps-retry').on('click', function (event) {
            //     event.preventDefault();
            //
            //     $.ajax({
            //         url: $(this).data('url'),
            //         type: 'GET',
            //         success: function (res) {
            //             startTimer(res.data.seconds);
            //
            //             $('.otps-retry').addClass('d-none');
            //             $('.login-btn').removeClass('disabled');
            //         },
            //         error: function (res) {
            //             console.error(res.data.data);
            //         }
            //     })
            // })

            function checkOtpExpired() {
                $.ajax({
                    url: "{{ route('otps.check-expired') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        token: "{{ $token }}"
                    },
                    success: function (res) {
                        if (res.data.status) {
                            $('.otps-retry').addClass('d-none');
                            $('.login-btn').removeClass('disabled');
                        }
                    },
                    error: function (res) {
                        console.error(res);
                    }
                })
            }
        });
    </script>
@endsection
