<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Morilog\Jalali\Jalalian;
use Scheduling\Models\Appointment;
use Scheduling\Models\OpenDate;
use Scheduling\Models\OpenTime;
use User\Models\User;

class BookingController extends Controller
{


    public function index()
    {
//        $appointments = Appointment::where('user_id', Auth::id())->first();
        $appointments = User::MyAppointments();
        $dates = OpenDate::where('date', '>=', Carbon::now()->format('Y-m-d'))->with('openTimes')->get();
        return view('Scheduling::user.booking.index', compact('appointments', 'dates'));
    }

    public function store(OpenTime $time)
    {
        dd($time);
    }

}
