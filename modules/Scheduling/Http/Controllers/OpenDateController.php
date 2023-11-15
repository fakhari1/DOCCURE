<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use DateTime;
use Scheduling\Http\Requests\AppointmentRequest;
use Scheduling\Models\Appointment;
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
        return view('Scheduling::dates.create');
    }

    public function store()
    {

    }

    public function edit()
    {

    }
}
