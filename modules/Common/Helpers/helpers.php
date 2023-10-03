<?php


function module_path(string $module_name, string $path = ''): string
{
    $p = base_path() . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $module_name;

    if ($path != '')
        $p .= DIRECTORY_SEPARATOR . $path;

    return $p;
}
