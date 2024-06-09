@extends('Dashboard::user.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['نظرات من']])
@endsection

@section('content')

    <h3 class="mb-4">نظرات من</h3>

    <div class="row justify-content-start mb-4">
        <div>
            <a href="{{ route('user.comments.create') }}" class="btn btn-sm btn-success">
                <i class="fa-solid fa-plus"></i>
                نوشتن نظر
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th class="text-center">تاریخ ارسال</th>
            <th class="text-center">تاریخ آخرین پاسخ</th>
            <th class="text-center">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @if(is_null($comments))
            <tr>
                <td colspan="10" class="text-center">داده ای در سیستم ثبت نشده است</td>
            </tr>
        @else
            @foreach($comments as $key => $comment)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">
                        {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($comment->created_at))->format('Y/m/d') }}
                    </td>
                    <td class="text-center">
                        @if($comment->hasAnswer())
                            {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($comment->last_answer->created_at))->format('Y/m/d') }}
                        @else
                            <span>پاسخ داده نشده است</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('user.comments.show', ['comment' => $comment]) }}"
                           class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-retweet"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection
