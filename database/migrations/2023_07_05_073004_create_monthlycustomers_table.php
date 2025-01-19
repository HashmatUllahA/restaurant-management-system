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
        Schema::create('monthlycustomers', function (Blueprint $table) {
            $table->id();
            $table->string('Customerid');
            $table->string('Customername');
            $table->string('Customermobile');
            $table->string('CustomerComName');
            $table->string('CustomerBidg');
            $table->string('CustomerRoomno');
            $table->string('CustomerAdvance');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthlycustomers');
    }
};
