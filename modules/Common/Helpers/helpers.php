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

function get_sms_originator() {
    return config('sms.keys.originator');
}
