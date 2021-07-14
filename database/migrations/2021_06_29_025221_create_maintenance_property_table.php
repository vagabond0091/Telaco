<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_property', function (Blueprint $table) {
            $table->foreignId('maintenance_id')->constrained('maintenances')->onUpdate('Cascade')->onDelete('Cascade');
            $table->foreignId('property_id')->constrained('properties')->onUpdate('Cascade')->onDelete('Cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('Cascade')->onDelete('Cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenance_property');
    }
}
