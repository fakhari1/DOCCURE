<?php

namespace Scheduling\Migrations\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Scheduling\Models\AppointmentStatus;

class AppointmentStatusSeeder extends Seeder
{

    public function run()
    {

        DB::table('appointment_statuses')->delete();

        DB::table('appointment_statuses')->insert([
            0 => [
                'name' => AppointmentStatus::STATUS_ACTIVE,
            ],
            1 => [
                'name' => AppointmentStatus::STATUS_INACTIVE
            ],
            2 => [
                'name' => AppointmentStatus::STATUS_CANCELED
            ]
        ]);

    }

}
