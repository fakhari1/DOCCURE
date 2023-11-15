<?php

namespace Scheduling\Migrations\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Scheduling\Models\OpenDateStatus;

class OpenDateSeeder extends Seeder
{

    public function run()
    {

        $now = Carbon::now();
        $nextMonth = $now->addMonth();
        $nextMonthFirstDay = $nextMonth->startOfMonth();
        $nextMonthLastDay = $nextMonth->endOfMonth();
        $data = [];

        for ($i = 0; $i <= $now->endOfMonth()->format('d'); $i++) {
            $data[$i] = [
                'date' => $now->format('Y-m-d'),
                'morning_start_time' => '8',
                'morning_end_time' => '13',
                'evening_start_time' => '16',
                'evening_end_time' => '21',
            ];

            $now = $now->addDay();
        }

        $date = $nextMonthFirstDay;
        for ($i = $nextMonthFirstDay->format('d'); $i <= $nextMonthLastDay->format('d'); $i++) {
            $data[] = [
                'date' => $date->format('Y-m-d'),
                'morning_start_time' => '8',
                'morning_end_time' => '13',
                'evening_start_time' => '16',
                'evening_end_time' => '21',
            ];

            $date = $nextMonthFirstDay->addDay();
        }

        DB::table('open_dates')->delete();

        DB::table('open_dates')->insert(
            $data
        );

    }

}
