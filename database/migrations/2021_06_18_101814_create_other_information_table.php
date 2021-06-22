<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_information', function (Blueprint $table) {
            $table->id();
            $table->string('bedrooms')->nullable();
            $table->string('baths')->nullable();
            $table->string('floorarea')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('subdivision')->nullable();
            $table->string('total_room')->nullable();
            $table->string('car_space')->nullable();
            $table->string('total_floor')->nullable();
            $table->foreignId('property_id')->constrained('properties')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('other_information');
    }
}
