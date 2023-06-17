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
        Schema::create('detail_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('vehicle_type_id');
            $table->integer('qty');
            $table->timestamps();
            $table->foreign('booking_id')->references('id')->on('bookings');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_bookings');
    }
};
