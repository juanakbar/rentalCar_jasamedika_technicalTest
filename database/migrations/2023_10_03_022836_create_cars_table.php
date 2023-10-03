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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('car_name');
            $table->integer('year');
            $table->string('license_plat', 10);
            $table->integer('price');
            $table->enum('type', ['manual', 'matic']);
            $table->integer('brand_id');
            $table->enum('available', ['1', '0'])->default('1');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
