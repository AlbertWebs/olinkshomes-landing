<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('cat_id')->nullable();
            $table->text('content')->nullable();
            $table->text('meta')->nullable();
            $table->text('slung')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('image_one')->nullable();
            $table->text('image_two')->nullable();
            $table->text('image_three')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
