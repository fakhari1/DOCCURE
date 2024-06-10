<?php

namespace Comment\Http\Controllers;

use App\Http\Controllers\Controller;
use Comment\Http\Requests\UserCommentStoreRequest;
use Comment\Models\Comment;
use Illuminate\Support\Facades\Auth;

class UserCommentController extends Controller
{
    public function index()
    {
        $comments = Comment::where('author_id', Auth::id())->IsNotAnswer()->get();

        return view('Comment::user.index', compact('comments'));
    }
    public function create()
    {
        return view('Comment::user.create');
    }
    public function store(UserCommentStoreRequest $request)
    {
        Comment::create([
            'author_id' => Auth::id(),
            'text' => $request->body,
            'parent_id' => $request->parent_id ?? null,
            'status' => $request->parent_id != null ? Comment::STATUS_ACCEPTED : Comment::STATUS_PENDING,
        ]);

        return redirect()->route('user.comments.index')->with(['success_msg' => 'اطلاعات با موفقیت ثبت شد!']);
    }
    public function show(Comment $comment)
    {
        $comment->loadMissing('answers');

        return view('Comment::user.show', compact('comment'));
    }

    public function edit($id)
    {

    }
    public function update($id)
    {

    }
    public function destroy($id)
    {

    }
}
