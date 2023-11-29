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
//        Auth::login(User::firstOrFail());
//        Auth::login(User::where('id', '=', 2)->first());

        if (Auth::check()) {
            $user = Auth::user();

            if ($user->id == User::first()->id) {
                if ($user->hasRole(Role::ROLE_PATIENT)) {
                    $user->removeRole(Role::ROLE_PATIENT);
                    $user->assignRole(Role::ROLE_SUPER_ADMIN);
                }
            }
        }

        return view('Front::index');
    }
}
