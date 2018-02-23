<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCascadeConstituantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cascade_constituant', function (Blueprint $table) {
            $table->integer('cascade_id');
            $table->foreign('cascade_id')->references('id')->on('cascades');

            $table->integer('constituant_id');
            $table->foreign('constituant_id')->references('id')->on('constituants');
            
            $table->float('poids')->default(1);
            $table->primary(['cascade_id', 'constituant_id']);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cascade_constituant');
    }
}
