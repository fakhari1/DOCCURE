<?php

namespace Scheduling\Migrations\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Scheduling\Models\OpenDate;

class OpenTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('open_times')->delete();
        $dates = OpenDate::all();
        $data = [];

        $dates->each(function ($date) use ($data){
            $mst = $date->morning_start_time ?? null;
            $met = $date->morning_end_time ?? null;
            $est = $date->evening_start_time ?? null;
            $eet = $date->evening_end_time ?? null;
            $start_time = null;
            $end_time = null;

            if (!is_null($mst) or !is_null($met)) {
                $sub = Carbon::parse($met)->diffInHours(Carbon::parse($mst));
                $start_time = $mst;
                $end_time = Carbon::parse($start_time)->addMinutes($date->duration);


                while (Carbon::parse($end_time)->lessThanOrEqualTo(Carbon::parse($met))) {
                    $data[] = [
                        'date' => $date->date,
                        'start_time' => $start_time,
                        'end_time' => $end_time->format('H:i:s'),
                        'date_id' => $date->id,
                    ];

                    $start_time = $end_time->format('H:i:s');
                    $end_time = Carbon::parse($end_time)->addMinutes($date->duration);
                }
            }

            if (!is_null($est) or !is_null($eet)) {
                $sub = Carbon::parse($eet)->diffInHours(Carbon::parse($est));
                $start_time = $est;
                $end_time = Carbon::parse($start_time)->addMinutes($date->duration);


                while (Carbon::parse($end_time)->lessThanOrEqualTo(Carbon::parse($eet))) {
                    $data[] = [
                        'date' => $date->date,
                        'start_time' => $start_time,
                        'end_time' => $end_time->format('H:i:s'),
                        'date_id' => $date->id,
                    ];

                    $start_time = $end_time->format('H:i:s');
                    $end_time = Carbon::parse($end_time)->addMinutes($date->duration);
                }
            }

            DB::table('open_times')->insert(
                $data
            );

        });



    }
}
