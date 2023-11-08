<?php

namespace Dashboard\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Settings\Settings\GeneralSettings;

class DashboardController extends Controller
{
    public function index() {
        $settings = new GeneralSettings();
        return view('Dashboard::admin.index', compact('settings'));
    }



}
