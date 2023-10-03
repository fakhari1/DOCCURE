<?php

namespace Settings\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{

    public string $site_name;
    public int $doctor_id;
    public array $landing_phones;
    public string $address;
    public string $instagram_id;
    public string $telegram_id;

    public static function group(): string
    {
        return 'general';
    }

//    public static function casts(): array
//    {
//        return [
//            'landing_phones' => 'array'
//        ];
//    }
}
