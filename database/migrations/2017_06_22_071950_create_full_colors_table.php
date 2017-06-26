<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('full_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Size');
            $table->integer('One');
            $table->integer('Two');
            $table->integer('Three');
            $table->integer('Four');
            $table->integer('Five');
            $table->integer('Six');
            $table->integer('Seven');
            $table->integer('Eight');
            $table->integer('Nine');
            $table->integer('Ten');
            $table->integer('Eleven');
            $table->integer('Twelve');
            $table->integer('Thirteen');
            $table->integer('Fourteen');
            $table->integer('Fifteen');
            $table->integer('Sixteen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('full_colors');
    }
}
