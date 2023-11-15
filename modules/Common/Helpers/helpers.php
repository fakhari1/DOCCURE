<?php

use Carbon\Carbon;

function module_path(string $module_name, string $path = ''): string
{
    $p = base_path() . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $module_name;

    if ($path != '')
        $p .= DIRECTORY_SEPARATOR . $path;

    return $p;
}

function get_sms_api_key()
{
    return config('sms.keys.api_key');
}

function get_sms_originator()
{
    return config('sms.keys.originator');
}

function get_jalali_months()
{
    return [
        1 => 'فروردین',
        2 => 'اردیبهشت',
        3 => 'خرداد',
        4 => 'تیر',
        5 => 'مرداد',
        6 => 'شهریور',
        7 => 'مهر',
        8 => 'آبان',
        9 => 'آذر',
        10 => 'دی',
        11 => 'بهمن',
        12 => 'اسفند',
    ];
}

function get_appointment_durations()
{
    return [
        10,
        20,
        30,
        45,
        60
    ];
}

function get_ceil_hours()
{
    return [
        '1:00',
        '2:00',
        '3:00',
        '4:00',
        '5:00',
        '6:00',
        '7:00',
        '8:00',
        '9:00',
        '10:00',
        '11:00',
        '12:00',
        '13:00',
        '14:00',
        '15:00',
        '16:00',
        '17:00',
        '18:00',
        '19:00',
        '20:00',
        '21:00',
        '22:00',
        '23:00',
        '00:00',
    ];
}

function get_remaining_jalali_months()
{
    $months = [];

    for ($m = jdate()->getMonth(); $m <= count(get_jalali_months()); $m++) {
        $months[$m] = get_jalali_months()[$m];
    }

    return $months;
}

function get_last_day_of_month()
{
    return Carbon::now()->endOfMonth()->format('d');
}

function get_today_number_of_month()
{
    return Carbon::now()->format('d');
}
