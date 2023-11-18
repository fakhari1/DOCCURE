<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;
use Scheduling\Http\Requests\OpenDateRequest;
use Scheduling\Models\OpenDate;
use Scheduling\Models\OpenDateStatus;
use Scheduling\Models\OpenTime;

class OpenTimeController extends Controller
{

    public function index(OpenDate $date)
    {
        $times = $date->openTimes;

        return view('Scheduling::times.index', compact('times', 'date'));
    }
}
