@extends('Dashboard::user.layouts.master')

@section('page-header')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">خوش آمدید</h3>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="booking-doc-info">
                        <a href="" class="booking-doc-img mb-4 d-block">
                            <img src="{{ asset('assets/images/doctor/doctor-thumb.jpg') }}" alt="پروفایل پزشک"
                                 class="mw-100-px">
                        </a>
                        <div class="booking-info">
                            <h5 class="mb-4"><a href="">{{ $settings->doctor_name }}</a></h5>

                            <p class="text-muted mb-4">
                                {{ $settings->description }}
                            </p>

                            <p class="text-muted mb-4"><i class="fas fa-map-marker-alt"></i>
                                {{ $settings->address }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    @include('Dashboard::user.sections.cards')--}}
    {{--    @include('Dashboard::user.sections.lists')--}}

@endsection
