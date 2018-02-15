<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCascadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cascades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',45);
            $table->integer('nombre_voies');
            $table->integer('altitude_minimum');
            $table->integer('hauteur');
            $table->string('niveau_engagement');
            $table->float('lat', 16, 14);
            $table->float('lng', 16, 14);
            $table->integer('pays_id')->unsigned();
            $table->integer('type_glace_id')->unsigned();
            $table->integer('type_fin_vie_id')->unsigned();
            $table->integer('structure_id')->unsigned();
            $table->integer('orientation_id')->unsigned();
            $table->integer('niveau_id')->unsigned();

            $table->foreign('pays_id')->references('id')->on('pays');
            $table->foreign('type_glace_id')->references('id')->on('types_glace');
            $table->foreign('type_fin_vie_id')->references('id')->on('types_fin_vie');
            $table->foreign('structure_id')->references('id')->on('structures');
            $table->foreign('orientation_id')->references('id')->on('orientations');
            $table->foreign('niveau_id')->references('id')->on('niveaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cascades');
    }
}
