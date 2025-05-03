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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); //primary key
            $table->string('name'); //guest's name
            $table->string('room_type'); //single, double, ect
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('nights'); // calculated from check in/check out
            $table->decimal('price_per_night', 8, 2);
            $table->decimal('total_price', 8, 2);
            $table->text('special_request')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
