<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCascadesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cascades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',45)->nullable();
            $table->integer('nombre_voies')->nullable();
            $table->integer('altitude_minimum')->nullable();
            $table->integer('hauteur')->nullable();
            $table->string('niveau_engagement')->nullable();
            $table->float('lat', 16, 14)->nullable();
            $table->float('lng', 16, 14)->nullable();
            $table->integer('pays_id')->unsigned()->nullable();
            $table->integer('type_fin_vie_id')->unsigned()->nullable();
            $table->integer('type_glace_id')->unsigned()->nullable();
            $table->integer('structure_id')->unsigned()->nullable();
            $table->integer('orientation_id')->unsigned()->nullable();
            $table->integer('niveau_id')->unsigned()->nullable();

            $table->foreign('pays_id')->references('id')->on('pays');
            $table->foreign('type_fin_vie_id')->references('id')->on('types_fin_vie');
            $table->foreign('type_glace_id')->references('id')->on('types_glace');
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
    public function down() {
        Schema::dropIfExists('cascades');
    }
}
