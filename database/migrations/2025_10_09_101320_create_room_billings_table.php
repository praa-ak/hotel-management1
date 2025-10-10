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
        Schema::create('room_billings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('checkin_id')->constrained('checkins')->onDelete('cascade');
            $table->integer('discount')->default(0);
            $table->integer('total_amount');
            $table->string('payment_method');
            $table->string('payment_status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_billings');
    }
};
