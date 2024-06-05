<?php

namespace Modules\Settings\Http\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Settings\Settings\GeneralSettings;
use Symfony\Component\HttpFoundation\Response;

class IsSettingsCompleted
{

    public function handle(Request $request, Closure $next): Response
    {
        $settings = new GeneralSettings();

        if (!$settings->title or
            !$settings->site_name or
            !$settings->address or
            !$settings->landline_phones or
            !$settings->specialization
        ) {
            return redirect()->route('admin.settings.general.index')->with(['error_msg' => 'لطفا ابتدا تنظیمات مربوط به پزشک را تکمیل کنید!']);
        }

        return $next($request);
    }
}
