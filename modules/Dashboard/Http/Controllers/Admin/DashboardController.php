<?php

namespace Dashboard\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        return view('Dashboard::admin.index');
    }



}
