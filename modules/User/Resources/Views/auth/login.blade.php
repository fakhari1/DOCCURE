@extends('User::auth.layouts.master')

@section('title','ورود')

@section('sub_content')
    <div class="login-header mb-5">
        <h2 class="text-center">ورود به حساب کاربری</h2>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group form-focus mb-5">
            <input type="text" class="form-control p-4" name="mobile" title="شماره همراه" style="direction: ltr !important; text-align: left !important;">
            <label class="focus-label">شماره همراه</label>
        </div>

        <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">
            ورود
        </button>
    </form>
@endsection
