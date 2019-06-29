<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class   CreatePostAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_adds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('category');
            $table->string('make');
            $table->string('model');
            $table->string('date_of_first_registration');
            $table->string('power');
            $table->integer('kilometer');
            $table->integer('vehicle_no');
            $table->string('vehicle');
            $table->integer('price');
            $table->integer('vat');
            $table->string('Perm_gvw');
            $table->string('Admissible_haulage_weight');
            $table->string('payload');
            $table->integer('empty_weight');
            $table->string('gearing_type');
            $table->string('brakes');
            $table->string('suspension');
            $table->string('axle_configuration');
            $table->integer('wheels_distance');
            $table->integer('tyre_size');
            $table->string('CO2_Emmision_combined');
            $table->string('Fuel_consumption_combined');
            $table->string('urban');
            $table->string('rural');
            $table->string('tuv_certified');
            $table->string('Colour');
            $table->string('Cab');
            $table->string('Attachment_parts');
            $table->string('Other_features');
            $table->string('Further_information');
            $table->integer('add_type')->default(3);
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('post_adds');
    }
}
