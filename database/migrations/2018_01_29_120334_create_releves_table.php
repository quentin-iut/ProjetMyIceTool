<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releves', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->float('temperature_moyenne');
            $table->tinyInteger('niveau_danger');
            $table->integer('zone_id')->unsigned();
            
            $table->foreign('zone_id')->references('id')->on('zones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('releves');
    }
}
