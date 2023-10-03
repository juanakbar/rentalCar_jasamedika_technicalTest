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
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->string('booking_code');
            $table->date('order_date');
            $table->integer('duration');
            $table->date('return_date_supposed');
            $table->date('return_date')->nullable();
            $table->integer('price');
            $table->enum('status', ['paid', 'process']);
            $table->string('fine')->nullable();
            $table->integer('employees_id');
            $table->integer('car_id');
            $table->integer('client_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
