<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use DateTime;
use Scheduling\Http\Requests\AppointmentRequest;
use Scheduling\Models\Appointment;
use Scheduling\Models\AppointmentStatus;
use Scheduling\Models\OpenTime;
use Spatie\OpeningHours\OpeningHours;

class AppointmentController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $appointments = Appointment::all();

        return view('Scheduling::appointments.index', compact('appointments'));
    }

    public function updateStatus(Appointment $appointment)
    {
        $status_id = $appointment->status_id == 1 ? 2 : 1;
        $appointment->update([
            'status_id' => $status_id
        ]);

        $trans = trans(AppointmentStatus::whereId($appointment->status_id)->first()->name);
        $msg = " وضعیت نوبت مورد نظر با موفقیت {$trans} شد! ";
        return redirect()->back()->with(['success_msg' => $msg]);
    }
}
