<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentACarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_a_cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('company_logo');
            $table->string('company_information');
            $table->string('category');
            $table->string('make');
            $table->string('model');
            $table->string('date_of_first_registration');
            $table->string('power');
            $table->integer('kilometer');
            $table->integer('vehicle_no');
            $table->string('vehicle');
            $table->integer('price');
            $table->integer('tyre_size');
            $table->string('Colour');
            $table->string('Further_information');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
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
        Schema::dropIfExists('rent_a_cars');
    }
}
