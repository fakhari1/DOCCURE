<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name');
        $this->migrator->add('general.title');
        $this->migrator->add('general.specialization');
        $this->migrator->add('general.description');
        $this->migrator->add('general.landline_phones');
        $this->migrator->add('general.address');
        $this->migrator->add('general.instagram_id');
        $this->migrator->add('general.telegram_id');
    }
};
