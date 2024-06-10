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
use Scheduling\Models\OpenTimeStatus;

class OpenTimeController extends Controller
{

    public function index(OpenDate $date)
    {
        $times = $date->openTimes;

        return view('Scheduling::times.index', compact('times', 'date'));
    }

    public function updateStatus(OpenTime $time)
    {
        $status_id = $time->status_id == 1 ? OpenTimeStatus::where('name', OpenTimeStatus::STATUS_INACTIVE)->first()->id : OpenTimeStatus::where('name', OpenTimeStatus::STATUS_ACTIVE)->first()->id;

        $time->update([
            'status_id' => $status_id
        ]);

        return redirect()->back()->with(['success_msg' => 'عملیات موفق']);
    }

    public function getDateTimes(OpenDate $date)
    {
        return response()->json([
            'data' => $date->openTimes
        ]);
    }
}
