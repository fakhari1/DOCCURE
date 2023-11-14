<?php

namespace Front\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Settings\Settings\GeneralSettings;
use User\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        Auth::login(User::firstOrFail());
//        Auth::login(User::where('id', '=', 2)->first());
        return view('Front::index');
    }
}
