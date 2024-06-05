<?php

namespace Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use Settings\Http\Requests\GeneralSettingsRequest;
use Settings\Settings\GeneralSettings;

class GeneralSettingsController extends Controller
{


    public function create()
    {
        $settings = new GeneralSettings();

        return view('Settings::create', compact('settings'));
    }

    public function store(GeneralSettingsRequest $request, GeneralSettings $settings)
    {
        $settings->site_name = $request->site_name;
        $settings->title = $request->title;
        $settings->specialization = $request->specialization;
        $settings->description = $request->description ?? '';
        $settings->landline_phones = $request->phones;
        $settings->address = $request->address;
        $settings->telegram_id = $request->telegram_id ?? '';
        $settings->instagram_id = $request->instagram_id ?? '';

        $settings->save();

        return redirect()
            ->route('dashboard.admin.index')
            ->with(['success_msg' => 'تنظیمات با موفقیت  ثبت شد!']);
    }
}
