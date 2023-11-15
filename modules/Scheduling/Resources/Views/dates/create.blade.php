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
                بازگشت
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        </div>
    </div>
    <form action="{{ route('admin.open-dates.store') }}" method="post">
        @csrf

        <h4 class="mb-4">
            سال
            {{ jdate()->getYear() }}
        </h4>

        <div class="row">
            @foreach(get_jalali_months() as $key => $month)
                <div class="col-md-6 col-12 mw-200-px">
                    <div class="form-check form-check-inline m-r-10 dir-rtl">

                        <input class="form-check-input"
                               style="float: right !important;"
                               type="radio"
                               name="month_id[]"
                               value="{{ $key }}"
                               @if(jdate()->getMonth() > $key)
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
