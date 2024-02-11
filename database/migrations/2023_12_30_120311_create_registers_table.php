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
        Schema::create('registers', function (Blueprint $table) {
            $table->id("Id");
            $table->string('Name', 255);
            $table->string('Email', 255);
            $table->string("Password");
            $table->string("Address1", 255);
            $table->string("Address2", 255);
            $table->string('City', 255);
            $table->string('State', 255);
            $table->string('Zip', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
