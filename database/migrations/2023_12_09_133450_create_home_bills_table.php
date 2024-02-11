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
        Schema::create('home_bills', function (Blueprint $table) {
            $table->id();
            $table->string("Month");
            $table->integer("HomeRent");
            $table->integer("Waste");
            $table->integer("Water");
            $table->integer("Internet");
            $table->integer("PreviousElecRead");
            $table->integer("CurrentElecRead");
            $table->integer('UnitConsumed');
            $table->integer("Amount");
            $table->integer('Total_Amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_bills');
    }
};
