<?php

namespace Front\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use User\Models\User;

class HomeController extends Controller
{
    public function index()
    {
//        Auth::login(User::first());
        return view('Front::index');
    }
}
