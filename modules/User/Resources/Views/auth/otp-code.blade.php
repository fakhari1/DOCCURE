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
                   onclick="event.preventDefault(); document.getElementById('form_retry_otp').submit()"
                >
                    ارسال مجدد کد تایید
                </a>
            </div>
        </div>
    </form>
    <form action="{{ route('otps.retry') }}" method="post" id="form_retry_otp">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            checkOtpExpired();

            let seconds = 120;
            let minutes = 0;

            let countdown = setInterval(function() {
                minutes = Math.floor(seconds / 60);
                seconds = seconds % 60;

                if (seconds > 0) {
                    seconds--;
                } else {
                    if (minutes > 0) {
                        minutes--;
                        seconds = 59;
                    } else {
                        clearInterval(countdown);
                        $('.login-btn').addClass('d-none');
                        $('.otps-retry').removeClass('d-none');
                    }
                }

                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;

                $('.countdown').text(minutes + ":" + seconds);

            }, 1000); // Update the timer every second

            function checkOtpExpired() {
                $.ajax({
                    url: "{{ route('otps.check-expired') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        token: "{{ $token }}"
                    },
                    success: function (res) {
                        console.log(res.data.status)
                        if (res.data.status) {
                            $('.login-btn').addClass('d-none');
                            $('.otps-retry').removeClass('d-none');
                            clearInterval(countdown);
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
