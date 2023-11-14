<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use DateTime;
use Scheduling\Http\Requests\AppointmentRequest;
use Scheduling\Models\Appointment;
use Spatie\OpeningHours\OpeningHours;

class OpenTimeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('Scheduling::times.index');
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }
}
