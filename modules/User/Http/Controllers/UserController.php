<?php

namespace User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use User\Http\Requests\UserProfileRequest;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->isAdmin())
            return view('User::admin.profile.index', compact('user'));
        else
            return view('User::user.profile.index', compact('user'));
    }


    public function store(UserProfileRequest $request)
    {
        Auth::user()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'job' => $request->job ?? null,
            'national_code' => $request->national_code
        ]);

        return redirect()->back()->with(['success_msg' => 'عملیات موفق']);
    }
}
