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
        Schema::connection('mysql_stock')->create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable(false);
            $table->foreignId('material_id')->constrained('materials')->onDelete('cascade')->nullable(false);
            $table->string('description_id')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('type')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('price')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable(false);
            $table->string('transaction_type')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable(false);
            $table->unsignedBigInteger('qty')->nullable(false);
            $table->string('total_price_out')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('total_price_in')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('total_price')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('pic')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable(false);
            $table->string('keterangan')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->timestamps(); // Menggunakan default `NULL`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
