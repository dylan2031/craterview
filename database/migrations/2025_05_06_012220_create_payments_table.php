<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the person making the payment
            $table->string('description'); // What the payment is for
            $table->decimal('amount', 10, 2); // Amount in proper decimal format
            $table->text('message')->nullable(); // Optional message
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to users table
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
