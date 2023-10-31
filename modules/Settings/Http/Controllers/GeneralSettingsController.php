<?php

namespace Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use Settings\Http\Requests\GeneralSettingsRequest;
use Settings\Settings\GeneralSettings;

class GeneralSettingsController extends Controller
{


    public function index()
    {
        $settings = new GeneralSettings();

        return view('Dashboard::admin.settings.index', compact('settings'));
    }

    public function store(GeneralSettingsRequest $request, GeneralSettings $settings)
    {
        $settings->site_name = $request->site_name;
        $settings->doctor_name = $request->doctor_name;
        $settings->specialization = $request->specialization;
        $settings->description = $request->description ?? '';
        $settings->landline_phones = $request->phones;
        $settings->address = $request->address;
        $settings->telegram_id = $request->telegram_id ?? '';
        $settings->instagram_id = $request->instagram_id ?? '';

        $settings->save();

        return redirect()->back()->with(['success_msg' => 'تنظیمات ثبت شد!']);
    }
}
