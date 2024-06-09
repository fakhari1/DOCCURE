@foreach($comment->answers as $key => $answer)
    <div class="row mb-4 me-2">
        <div class="col-12">
            <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        <div class="badge bg-secondary">
                            <span>{{ $answer->author->name }}</span>
                            <span> در تاریخ</span>
                            <span>
                                {{ Morilog\Jalali\Jalalian::fromCarbon(Carbon\Carbon::parse($answer->created_at))->format('%A, %d %B %Y') }}
                            </span>
                            <span>
                                پاسخ داده:
                            </span>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        {{ $answer->text }}
                    </div>
                </div>
            </div>
        </div>

        @if($comment->hasAnswer())
            @include('Comment::user.sections.answer', ['comment' => $answer])
        @endif
    </div>
@endforeach
