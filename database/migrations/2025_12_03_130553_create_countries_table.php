<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('language')->nullable();
            $table->string('iso3', 3)->unique();
            $table->string('numeric_code', 3)->unique(); 
            $table->string('phone_code', 10); 

            $table->index('name');
            $table->index('iso3');
            $table->index('numeric_code');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
