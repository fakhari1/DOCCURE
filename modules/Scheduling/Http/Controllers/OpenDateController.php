<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DateTime;
use Scheduling\Http\Requests\AppointmentRequest;
use Scheduling\Models\Appointment;
use Scheduling\Models\OpenDate;
use Scheduling\Models\OpenDateStatus;
use Spatie\OpeningHours\OpeningHours;

class OpenDateController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('Scheduling::dates.index');
    }

    public function create()
    {

        $holiday_months = OpenDate::get()->pluck('date');
        $statuses = OpenDateStatus::all();
        return view('Scheduling::dates.create', compact('statuses'));
    }

    public function store()
    {

    }

    public function edit()
    {

    }
}
