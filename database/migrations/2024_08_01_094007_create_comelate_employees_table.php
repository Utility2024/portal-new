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
        Schema::connection('mysql_hr')->create('comelate_employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nik');
            $table->string('name');
            $table->string('department');
            $table->string('alasan_terlambat');
            $table->string('nama_security');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comelate_employees');
    }
};
