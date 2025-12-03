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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
              $table->string('name')->nullable();
            $table->string('language')->nullable();
            $table->string('iso3', 3)->unique();
            $table->string('numericCode', 3)->unique(); // Cambiado a snake_case
            $table->string('phoneCode', 10); // Cambiado a snake_case
            $table->timestamps();

            $table->index('name');
            $table->index('iso3');
            $table->index('numericCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
