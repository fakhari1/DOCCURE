<?php

namespace Comment\Http\Controllers;

use App\Http\Controllers\Controller;
use Comment\Models\Comment;
use Illuminate\Support\Facades\Auth;

class DoctorCommentController extends Controller
{
    public function index()
    {
        $comments = Comment::IsNotAnswer()->get();

        return view('Comment::admin.index', compact('comments'));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function  show(Comment $comment)
    {
        $comment->loadMissing('answers');

        return view('Comment::admin.show', compact('comment'));
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy(Comment $comment)
    {
        if (!$comment->isAnswer() || $comment->author_id != Auth::id()) {
            return redirect()->back()->with(['error_msg' => 'این نظر اجازه حذف شدن ندارد!']);
        }

        $comment->delete();

        return redirect()->back()->with(['success_msg' => 'این نظر با موفقیت حذف شد']);
    }

    public function updateStatus(Comment $comment)
    {
        $status = $comment->isAccepted() ? Comment::STATUS_PENDING : Comment::STATUS_ACCEPTED;

        $comment->update(['status' => $status]);

        return redirect()->route('admin.comments.index')->with(['success_msg' => 'نظر با موفقیت بروزرسانی شد!']);
    }
}
