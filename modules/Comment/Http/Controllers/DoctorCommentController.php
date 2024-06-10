<?php

namespace Comment\Http\Controllers;

use App\Http\Controllers\Controller;
use Comment\Http\Requests\AdminCommentUpdateRequest;
use Comment\Http\Requests\UserCommentStoreRequest;
use Comment\Models\Comment;
use Illuminate\Support\Facades\Auth;

class DoctorCommentController extends Controller
{
    public function index()
    {
        $comments = Comment::IsNotAnswer()->get();

        return view('Comment::admin.index', compact('comments'));
    }

    public function store(UserCommentStoreRequest $request)
    {
        Comment::create([
            'parent_id' => $request->parent_id,
            'author_id' => Auth::id(),
            'status' => Comment::STATUS_ACCEPTED,
            'text' => $request->body,
        ]);

        return redirect()->back()->with(['success_msg' => 'عملیات موفق']);
    }

    public function  show(Comment $comment)
    {
        $comment->loadMissing('answers');

        return view('Comment::admin.show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('Comment::admin.edit', compact('comment'));
    }

    public function update(AdminCommentUpdateRequest $request, Comment $comment)
    {
        $comment->update([
            'text' => $request->body
        ]);

        return redirect()->route('admin.comments.index')->with(['success_msg' => 'عملیات موفق']);
    }

    public function destroy(Comment $comment)
    {
        if (!$comment->isAnswer() || $comment->author_id != Auth::id()) {
            return redirect()->back()->with(['error_msg' => 'این نظر اجازه حذف شدن ندارد!']);
        }

        $comment->delete();

        return redirect()->route('admin.comments.index')->with(['success_msg' => 'عملیات موفق']);
    }

    public function updateStatus(Comment $comment)
    {
        $status = $comment->isAccepted() ? Comment::STATUS_PENDING : Comment::STATUS_ACCEPTED;

        $comment->update(['status' => $status]);

        return redirect()->route('admin.comments.index')->with(['success_msg' => 'عملیات موفق']);
    }
}
