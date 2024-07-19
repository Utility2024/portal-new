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
        Schema::create('target_measurements', function (Blueprint $table) {
            $table->id();
            $table->string('measurement_type');
            $table->unsignedBigInteger('target');
            $table->unsignedBigInteger('actual');
            $table->string('percent')->nullable();
            $table->string('week');
            $table->date('date_from');
            $table->date('date_until');
            $table->string('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('target_measurements');
    }
};
