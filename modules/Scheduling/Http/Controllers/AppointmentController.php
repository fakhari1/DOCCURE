<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use DateTime;
use Scheduling\Http\Requests\AppointmentRequest;
use Scheduling\Models\Appointment;
use Spatie\OpeningHours\OpeningHours;

class AppointmentController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function create()
    {

    }

    public function store(AppointmentRequest $request)
    {

    }

    public function edit(Appointment $appointment)
    {

    }

    public function update(Appointment $appointment, AppointmentRequest $request)
    {

    }

    public function destroy(Appointment $appointment)
    {

    }


    public function storeOpenHours()
    {
        $openingHours = OpeningHours::create([
            'monday'     => ['09:00-12:00', '13:00-18:00'],
            'tuesday'    => ['09:00-12:00', '13:00-18:00'],
            'wednesday'  => ['09:00-12:00'],
            'thursday'   => ['09:00-12:00', '13:00-18:00'],
            'friday'     => ['09:00-12:00', '13:00-20:00'],
            'saturday'   => ['09:00-12:00', '13:00-22:00'],
            'sunday'     => [],
//            'exceptions' => [
//                '2016-11-11' => ['09:00-12:00'],
//                '2016-12-25' => [],
//                '01-01'      => [],                // Recurring on each 1st of January
//                '12-25'      => ['09:00-12:00'],   // Recurring on each 25th of December
//            ],
        ]);

        dd($openingHours->forDate(new DateTime('now')));

        $now = new DateTime('now');
        $range = $openingHours->currentOpenRange($now);

        if ($range) {
            echo "It's open since ".$range->start()."\n";
            echo "It will close at ".$range->end()."\n";
        } else {
            echo "It's closed since ".$openingHours->previousClose($now)->format('l H:i')."\n";
            echo "It will re-open at ".$openingHours->nextOpen($now)->format('l H:i')."\n";
        }
    }

}
