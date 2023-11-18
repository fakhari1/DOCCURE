<?php

namespace Scheduling\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Scheduling\Http\Requests\OpenDateRequest;
use Scheduling\Models\OpenDate;
use Scheduling\Models\OpenDateStatus;

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
        dd($request->all());
        $date = substr($request->start_date, 0, 10);
        dd(Carbon::createFromTimestamp($date)->format('Y-m-d'), Jalalian::fromCarbon(Carbon::createFromTimestamp($date))->format('Y/m/d'));


    }

    public function edit()
    {

    }
}
