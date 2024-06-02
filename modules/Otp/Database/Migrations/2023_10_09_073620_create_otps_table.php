<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Otp\Models\Otp;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('otps', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->unsignedBigInteger('mobile');
            $table->unsignedInteger('verification_code');
            $table->string('token');
            $table->timestamp('expired_at');
            $table->enum('status', [Otp::$statuses])->default(Otp::STATUS_PENDING);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otps');
    }
};
