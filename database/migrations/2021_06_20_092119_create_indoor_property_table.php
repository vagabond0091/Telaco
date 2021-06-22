<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndoorPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indoor_property', function (Blueprint $table) {
            $table->foreignId('indoor_id')->constrained('indoors')->onUpdate('Cascade')->onDelete('Cascade');
            $table->foreignId('property_id')->constrained('properties')->onUpdate('Cascade')->onDelete('Cascade');
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
        Schema::dropIfExists('indoor_property');
    }
}
