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
        Schema::connection('mysql_stock')->create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('sap_code');
            $table->string('description');
            $table->string('type');
            $table->unsignedBigInteger('qty_first');
            $table->unsignedBigInteger('in')->nullable();
            $table->unsignedBigInteger('out')->nullable();
            $table->unsignedBigInteger('last_stock')->nullable();
            $table->unsignedBigInteger('minimum_stock');
            $table->string('unit');
            $table->string('information');
            $table->string('price')->nullable();
            $table->string('total_price')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
