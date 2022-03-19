<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id')->nullable();
            $table->string('air_conditioning')->nullable();
            $table->string('gym')->nullable();
            $table->string('microwave')->nullable();
            $table->string('swimming_pool')->nullable();
            $table->string('wifi')->nullable();
            $table->string('barbeque')->nullable();
            $table->string('recreation')->nullable();
            $table->string('basketball_court')->nullable();
            $table->string('fireplace')->nullable();
            $table->string('refrigerator')->nullable();
            $table->string('washer')->nullable();
            $table->string('security')->nullable();
            $table->string('indoor_games')->nullable();
            $table->string('window_coverings')->nullable();
            $table->string('elevator')->nullable();
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
        Schema::dropIfExists('amenities');
    }
}
