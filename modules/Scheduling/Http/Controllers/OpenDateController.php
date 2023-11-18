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

class OpenDateController extends Controller
{
    protected $count;
    public function __construct()
    {
        $this->count = 0;
    }

    public function index()
    {
        $dates = OpenDate::all();

        return view('Scheduling::dates.index', compact('dates'));
    }

    public function create()
    {
        $holiday_months = OpenDate::get()->pluck('date');
        $statuses = OpenDateStatus::all();
        return view('Scheduling::dates.create', compact('statuses'));
    }

    public function store(OpenDateRequest $request)
    {

        DB::beginTransaction();


        try {
            $startDate = get_timestamp_gregory_date(get_fixed_timestamp($request->start_date));
            $endDate = get_timestamp_gregory_date(get_fixed_timestamp($request->end_date));
            $holidays = [];
            $data = [];

            if (!is_null($request->holidays))
                foreach($request->holidays as $key => $day) {
                    $holidays[] = get_timestamp_gregory_date(get_fixed_timestamp($day))->format('Y-m-d');
                }

            $date = $startDate;

            for ($i = 0; $i <= $endDate->diffInDays($startDate); $i++) {
                $data[$i] = [
                    'date' => $date->format('Y-m-d'),
                    'morning_start_time' => $request->morning_start_time ?? null,
                    'morning_end_time' => $request->morning_end_time ?? null,
                    'evening_start_time' => $request->evening_start_time ?? null,
                    'evening_end_time' => $request->evening_end_time ?? null,
                    'duration' => $request->duration,
                    'is_holiday' => in_array($date->format('Y-m-d'), $holidays),
                    'status_id' => $request->status_id
                ];

                $date = Carbon::parse($date)->addDay();

                $openDate = OpenDate::create($data[$i]);

                $mst = $openDate->morning_start_time ?? null;
                $met = $openDate->morning_end_time ?? null;
                $est = $openDate->evening_start_time ?? null;
                $eet = $openDate->evening_end_time ?? null;

                $start_time = null;
                $end_time = null;

                if (!is_null($mst) and !is_null($met)) {
                    $start_time = $mst;
                    $end_time = Carbon::parse($start_time)->addMinutes($openDate->duration);


                    while (Carbon::parse($end_time)->lessThanOrEqualTo(Carbon::parse($met))) {
                        $times[] = [
                            'date' => $openDate->date,
                            'start_time' => $start_time,
                            'end_time' => $end_time->format('H:i:s'),
                            'date_id' => $openDate->id,
                        ];

                        $start_time = $end_time->format('H:i:s');
                        $end_time = Carbon::parse($end_time)->addMinutes($openDate->duration);
                    }
                }

                if (!is_null($est) and !is_null($eet)) {
                    $start_time = $est;
                    $end_time = Carbon::parse($start_time)->addMinutes($openDate->duration);

                    while (Carbon::parse($end_time)->lessThanOrEqualTo(Carbon::parse($eet))) {
                        $times[] = [
                            'date' => $openDate->date,
                            'start_time' => $start_time,
                            'end_time' => $end_time->format('H:i:s'),
                            'date_id' => $openDate->id,
                        ];

                        $start_time = $end_time->format('H:i:s');
                        $end_time = Carbon::parse($end_time)->addMinutes($openDate->duration);
                    }
                }

            }

            foreach($times as $key => $time) {
                OpenTime::create($time);
            }

            DB::commit();

            return redirect()->route('admin.open-dates.index')->with(['success_msg' => 'اطلاعات با موفقیت ثبت شد!']);
        } catch (\Exception $exception) {
            DB::rollBack();

            return redirect()->back()->with(['error_msg' => $exception->getMessage()]);

        }

    }

    public function edit()
    {

    }
}
