<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_days', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedTinyInteger('day_of_month');
            $table->boolean('is_available')->default(true);
            $table->string('reason_of_unavailable')->nullable();
            $table->unsignedTinyInteger('appointment_duration')->comment('minutes based');
            $table->boolean('has_morning_turn')->default(true);
            $table->time('morning_start_time')->nullable();
            $table->time('morning_end_time')->nullable();
            $table->boolean('has_evening_turn')->default(true);
            $table->time('evening_start_time')->nullable();
            $table->time('evening_end_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_days');
    }
};
