<?php

namespace Dashboard\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Settings\Settings\GeneralSettings;

class DashboardController extends Controller
{
    public function index() {
        return view('Dashboard::admin.index');
    }



}
