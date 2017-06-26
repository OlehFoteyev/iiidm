<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeCrossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_crosses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('title_img');
            $table->string('priceUnilateral');
            $table->string('priceBilateral');
            $table->string('color');
            $table->string('signHeight');
            $table->string('signWight');
            $table->string('typeOfDescription');
            $table->string('pixelPitch');
            $table->string('brightness');
            $table->string('powerConsumption');
            $table->string('lifeTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_crosses');
    }
}
