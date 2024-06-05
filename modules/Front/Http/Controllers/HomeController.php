<?php

namespace Front\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RolePermission\Models\Role;
use User\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('Front::index');
    }
}
