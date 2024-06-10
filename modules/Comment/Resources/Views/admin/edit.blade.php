@extends('Dashboard::user.layouts.master')

@section('breadcrumb')
    @include('Dashboard::user.sections.breadcrumb', ['data' => ['ویرایش پاسخ']])
@endsection



@section('content')
    <h3 class="mb-4">ویرایش</h3>

    <form action="{{ route('admin.comments.update', ['comment' => $comment]) }}" method="post">
        @csrf
        @method('put')
        <div class="row mb-4">
            <div class="col-12 ">
                <div class="form-group">
                    <label for="" class="form-label">
                        <span class="text-danger">*</span>
                        متن نظر:
                    </label>
                    <textarea class="form-control bg-white" name="body" id=""  rows="10" style="resize: none">{{ old('body') ?? $comment->text }}</textarea>
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
