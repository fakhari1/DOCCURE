<?php

namespace Front\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use User\Models\User;

class HomeController extends Controller
{
    public function index()
    {
//        Auth::login(User::firstOrFail());
//        Auth::login(User::where('id', '=', 2)->first());
        return view('Front::index');
    }
}
