<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Scheduling\Models\OpenDateStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('open_date_statuses', function (Blueprint $table) {
            $table->id();
            $table->enum('name', OpenDateStatus::$statuses)->default(OpenDateStatus::STATUS_ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('open_date_statuses');
    }
};
