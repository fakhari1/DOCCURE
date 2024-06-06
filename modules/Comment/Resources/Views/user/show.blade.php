@extends('Dashboard::user.layouts.master')

@section('breadcrumb')
    @include('Dashboard::user.sections.breadcrumb', ['data' => ['مشاهده نظر و پاسخ']])
@endsection



@section('content')
    <h3 class="mb-4">مشاهده نظر و پاسخ</h3>

    <form action="{{ route('user.comments.store') }}" method="post">
        @csrf
        <div class="row mb-4">
            <div class="col-12 ">
                <div class="form-group">
                    <label for="" class="form-label">
                        <span class="text-danger">*</span>
                        متن نظر:
                    </label>
                    <textarea class="form-control bg-white" name="body" id="" rows="10"
                              style="resize: none">{{ old('body') }}</textarea>
                </div>
            </div>
        </div>
        @if($comment->hasAnswers())
            @include('Comment::user.sections.answer', ['comment' => $comment])

            <div class="row mb-4">
                <div class="col-12 ">
                    <div class="form-group">
                        <label for="" class="form-label">
                            <span class="text-danger">*</span>
                            متن نظر:
                        </label>
                        <textarea class="form-control bg-white" name="body" id="" rows="10"
                                  style="resize: none">{{ old('body') }}</textarea>
                    </div>
                </div>
            </div>

        @endif
        <div class="row-mb-4">
            <div class="col-12 col-md-6">
                <button type="submit" class="btn btn-sm btn-success">ثبت</button>
            </div>
        </div>
    </form>

@endsection
