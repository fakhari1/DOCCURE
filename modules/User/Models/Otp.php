<?php

namespace User\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Otp extends Model
{
    protected $table = 'otps';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'mobile',
        'verification_code',
        'expired_at',
        'status',
        'token'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    const STATUS_PENDING = 'pending';
    const STATUS_EXPIRED = 'expired';
    const STATUS_ACCEPTED = 'accepted';

    static array $statuses = [
        self::STATUS_EXPIRED,
        self::STATUS_ACCEPTED,
        self::STATUS_PENDING
    ];

    public function isExpired()
    {
        if (Carbon::now()->greaterThanOrEqualTo(Carbon::parse($this->expired_at))) {
            $this->update(['status' => self::STATUS_EXPIRED]);
            return true;
        }

        return false;
    }

    public function isAccepted()
    {
        return $this->status == self::STATUS_ACCEPTED;
    }

    public function scopeHasPendingCode($query, $mobile)
    {
        $existsOtp = $query
            ->where('mobile', $mobile)
            ->where('expired_at', '>', Carbon::now())
            ->where('status', self::STATUS_PENDING)
            ->first();
        return $existsOtp ?? false;
    }

    public function scopeHasExpiredCode($query, $mobile)
    {
        $existsOtp = $query
            ->where('mobile', $mobile)
            ->where('expired_at', '<', Carbon::now())
            ->get();

        return count($existsOtp) > 0 ? $existsOtp : false;
    }
}
