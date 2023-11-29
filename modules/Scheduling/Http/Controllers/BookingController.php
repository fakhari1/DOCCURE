<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Morilog\Jalali\Jalalian;
use Scheduling\Models\Appointment;
use Scheduling\Models\OpenDate;
use Scheduling\Models\OpenDateStatus;
use Scheduling\Models\OpenTime;
use User\Models\User;

class BookingController extends Controller
{


    public function index()
    {
//        $appointments = Appointment::where('user_id', Auth::id())->first();
//        $appointments = User::MyAppointments();
        $dates = OpenDate::where('date', '>=', Carbon::now()->format('Y-m-d'))->with('openTimes')->get();
        return view('Scheduling::user.booking.index', compact('dates'));
    }

    public function store(OpenTime $time)
    {
        Appointment::create([
            'user_id' => Auth::id(),
            'open_date_id' => $time->date_id,
            'open_time_id' => $time->id,
        ]);

        return redirect()->route('user.appointments.index')->with(['success_msg' => 'تاریخ و زمان نوبت با موفقیت رزرو شد!']);
    }

}
