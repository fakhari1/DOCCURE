<?php

namespace Scheduling\Migrations\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Scheduling\Models\OpenTimeStatus;

class OpenTimeStatusSeeder extends Seeder
{

    public function run() {

        DB::table('open_time_statuses')->delete();

        DB::table('open_time_statuses')->insert([
            0 => [
                'name' => OpenTimeStatus::STATUS_ACTIVE,
            ],
            1 => [
                'name' => OpenTimeStatus::STATUS_INACTIVE
            ]
        ]);

    }

}
