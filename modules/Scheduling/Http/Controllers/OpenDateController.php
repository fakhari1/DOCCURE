<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Scheduling\Http\Requests\OpenDateRequest;
use Scheduling\Models\OpenDate;
use Scheduling\Models\OpenDateStatus;
use Scheduling\Models\OpenTime;
use Scheduling\Models\OpenTimeStatus;

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

            if (!is_null($request->holidays)) {
                foreach ($request->holidays as $key => $day) {
                    if (!$endDate->greaterThan(get_timestamp_gregory_date(get_fixed_timestamp($day)))) {
                        return redirect()->back()->with(['error_msg' => 'روز های تعطیل نمی توانند بعد از تاریخ پایان باشند!']);
                    }
                    $holidays[] = get_timestamp_gregory_date(get_fixed_timestamp($day))->format('Y-m-d');
                }
            }

            $date = $startDate;

            for ($i = 0; $i <= $endDate->diffInDays($startDate); $i++) {
                $is_holiday = in_array($date->format('Y-m-d'), $holidays);
                $data[$i] = [
                    'date' => $date->format('Y-m-d'),
                    'morning_start_time' => $request->morning_start_time ?? null,
                    'morning_end_time' => $request->morning_end_time ?? null,
                    'evening_start_time' => $request->evening_start_time ?? null,
                    'evening_end_time' => $request->evening_end_time ?? null,
                    'duration' => $request->duration,
                    'is_holiday' => $is_holiday,
                    'status_id' => $is_holiday ? OpenDateStatus::where('name', OpenDateStatus::STATUS_INACTIVE)->first()->id : $request->status_id
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

            foreach ($times as $key => $time) {
                OpenTime::create($time);
            }

            DB::commit();

            return redirect()->route('admin.open-dates.index')->with(['success_msg' => 'عملیات موفق']);
        } catch (\Exception $exception) {
            DB::rollBack();

            return redirect()->back()->with(['error_msg' => $exception->getMessage()]);

        }

    }

    public function edit(OpenDate $date)
    {
        $statuses = OpenDateStatus::all();
        return view('Scheduling::dates.edit', compact('date', 'statuses'));
    }

    public function update(OpenDate $date, OpenDateRequest $request)
    {
        if ($date->hasAppointment())
            return redirect()->route('admin.open-dates.index')->with(['error_msg' => 'روز انتخاب شده به علت داشتن نوبت رزرو شده قابل ویرایش نیست؛ اگر مصمم به ویرایش هستید ابتدا نوبت ها را لغو و سپس اقدام به ویرایش زمان بندی کنید!']);

        DB::beginTransaction();

        try {

            $date->openTimes()->each(function ($time) {
                if ($time->hasAppointment()) {
                    $time->appointment()->delete();
                }
                $time->delete();
            });

            $date->update([
                'morning_start_time' => $request->morning_start_time,
                'morning_end_time' => $request->morning_end_time,
                'evening_start_time' => $request->evening_start_time,
                'evening_end_time' => $request->evening_end_time,
                'duration' => $request->duration,
                'status_id' => $request->status_id
            ]);

//            if ($date->isItClosed()) $date->closeMyTimes();
//            if (!$date->isItClosed()) $date->openMyTimes();

            $mst = $request->morning_start_time ?? null;
            $met = $request->morning_end_time ?? null;
            $est = $request->evening_start_time ?? null;
            $eet = $request->evening_end_time ?? null;

            $start_time = null;
            $end_time = null;

            if (!is_null($mst) and !is_null($met)) {
                $start_time = $mst;
                $end_time = Carbon::parse($start_time)->addMinutes($request->duration);


                while (Carbon::parse($end_time)->lessThanOrEqualTo(Carbon::parse($met))) {
                    $times[] = [
                        'date' => $date->date,
                        'start_time' => $start_time,
                        'end_time' => $end_time->format('H:i:s'),
                        'date_id' => $date->id,
                        'status_id' => $date->status->name !== OpenDateStatus::STATUS_ACTIVE ? OpenTimeStatus::where('name', OpenTimeStatus::STATUS_INACTIVE)->first()->id : OpenTimeStatus::where('name', OpenTimeStatus::STATUS_ACTIVE)->first()->id
                    ];

                    $start_time = $end_time->format('H:i:s');
                    $end_time = Carbon::parse($end_time)->addMinutes($request->duration);
                }
            }

            if (!is_null($est) and !is_null($eet)) {
                $start_time = $est;
                $end_time = Carbon::parse($start_time)->addMinutes($request->duration);

                while (Carbon::parse($end_time)->lessThanOrEqualTo(Carbon::parse($eet))) {
                    $times[] = [
                        'date' => $date->date,
                        'start_time' => $start_time,
                        'end_time' => $end_time->format('H:i:s'),
                        'date_id' => $date->id,
                        'status_id' => $date->status->name !== OpenDateStatus::STATUS_ACTIVE ? OpenTimeStatus::where('name', OpenTimeStatus::STATUS_INACTIVE)->first()->id : OpenTimeStatus::where('name', OpenTimeStatus::STATUS_ACTIVE)->first()->id
                    ];

                    $start_time = $end_time->format('H:i:s');
                    $end_time = Carbon::parse($end_time)->addMinutes($request->duration);
                }
            }

            foreach ($times as $key => $time) {
                OpenTime::create($time);
            }

            DB::commit();

            return redirect()->route('admin.open-dates.times.index', $date)->with(['success_msg' => 'عملیات موفق']);


        } catch (\Exception $exception) {

            DB::rollBack();

            return redirect()->back()->with(['error_msg' => $exception->getMessage()]);

        }

    }
}
