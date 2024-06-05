<?php

namespace Modules\Settings\Http\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Settings\Settings\GeneralSettings;
use Symfony\Component\HttpFoundation\Response;

class IsSettingsCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $settings = new GeneralSettings();

        if (!$settings->doctor_name or !$settings->site_name or !$settings->address or !$settings->landline_phones or !$settings->specialization) {
            return redirect()->route('admin.settings.general.index')->with(['error_msg' => 'لطفا ابتدا تنظیمات مربوط به پزشک را تکمیل کنید!']);
        }

        return $next($request);
    }
}
