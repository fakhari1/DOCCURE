<?php

namespace Scheduling\Migrations\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Scheduling\Models\OpenDateStatus;

class OpenDateStatusSeeder extends Seeder
{

    public function run() {

        DB::table('open_date_statuses')->delete();

        DB::table('open_date_statuses')->insert([
            0 => [
                'name' => OpenDateStatus::STATUS_ACTIVE,
            ],
            1 => [
                'name' => OpenDateStatus::STATUS_INACTIVE
            ]
        ]);

    }

}
