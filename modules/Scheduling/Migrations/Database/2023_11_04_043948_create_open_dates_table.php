<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('open_dates', function (Blueprint $table) {
            $table->id();
            $table->date('date')->comment('based only in date with YYYY-mm-dd format');
            $table->enum('duration', get_appointment_durations())->default(get_appointment_durations()[0])->comment('based only in minutes');
            $table->time('morning_start_time')->nullable();
            $table->time('morning_end_time')->nullable();
            $table->time('evening_start_time')->nullable();
            $table->time('evening_end_time')->nullable();
            $table->unsignedTinyInteger('status_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('open_dates');
    }
};
