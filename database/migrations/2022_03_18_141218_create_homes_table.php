<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slung')->nullable();
            $table->text('meta')->nullable();
            $table->text('map')->nullable();
            $table->text('location')->nullable();
            $table->integer('cat')->nullable();
            $table->integer('sub_cat')->nullable();
            $table->integer('google_product_category')->nullable();
            $table->text('content')->nullable();
            $table->string('image_one')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('sold')->default('0');
            $table->string('fb_pixels')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('price')->nullable();
            $table->string('price_raw')->nullable();
            $table->string('code')->nullable();
            $table->string('tag')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
