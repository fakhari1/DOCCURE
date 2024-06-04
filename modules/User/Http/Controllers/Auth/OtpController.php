<?php

namespace User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RolePermission\Models\Role;
use SoapClient;
use User\Http\Requests\OtpGetRequest;
use User\Http\Requests\OtpSendRequest;
use User\Models\Otp;
use User\Models\User;

class OtpController extends Controller
{


}
