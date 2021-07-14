<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiryPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiry_property', function (Blueprint $table) {
            $table->foreignId('inquiry_id')->constrained('inquiries')->onUpdate('Cascade')->onDelete('Cascade');
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
        Schema::dropIfExists('inquiry_property');
    }
}
