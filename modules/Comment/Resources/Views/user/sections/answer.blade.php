@foreach($comment->answers as $key => $answer)
    <div class="row mb-4">
        <div class="col-12">
            <div class="form-group">
                <div class="card">
                    <div class="card-body bg-white">
                        {{ $answer->text }}
                    </div>
                </div>
            </div>
        </div>

        @if($comment->hasAnswers())
            @include('Comment::user.sections.answer', ['comment' => $answer])
        @endif
    </div>
@endforeach
