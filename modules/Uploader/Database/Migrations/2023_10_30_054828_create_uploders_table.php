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
        Schema::create('uploders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('size');
            $table->integer('time')->nullable()->comment('based on seconds');
            $table->string('type')->comment('video,image,archive');
            $table->boolean('is_private');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploders');
    }
};
