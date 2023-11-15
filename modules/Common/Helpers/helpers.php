<?php


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
