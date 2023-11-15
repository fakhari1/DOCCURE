<?php

namespace Scheduling\Migrations\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Scheduling\Models\OpenDate;

class OpenDateSeeder extends Seeder
{

    public function run()
    {

        $data = [];

        $now = Carbon::now();
        for ($i = Carbon::now()->format('d'); $i <= Carbon::now()->endOfMonth()->format('d'); $i++) {
            $data[$i] = [
                'date' => $now->format('Y-m-d'),
                'morning_start_time' => '8:00',
                'morning_end_time' => '13:00',
                'evening_start_time' => '16:00',
                'evening_end_time' => '21:00',
            ];

            $now->addDay();
        }

        $date = Carbon::now()->addMonth()->startOfMonth();

        for ($i = $date->format('d'); $i <= Carbon::now()->addMonth()->endOfMonth()->format('d'); $i++) {
            $data[] = [
                'date' => $date->format('Y-m-d'),
                'morning_start_time' => '8:00',
                'morning_end_time' => '13:00',
                'evening_start_time' => '16:00',
                'evening_end_time' => '21:00',
            ];

            $date->addDay();
        }

        DB::table('open_dates')->delete();

        DB::table('open_dates')->insert(
            $data
        );

    }

}
