<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('province');
            $table->string('city');
            $table->string('address');
            $table->double('latitude');
            $table->double('longtitude');
            $table->string('showroom_img');
            $table->double('price');
            $table->boolean('status');
            $table->foreignId('property_type_id')->constrained('property_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('property_subtype_id')->constrained('property_sub_types')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('properties');
    }
}
