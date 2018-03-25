<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('zones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 20)->nullable();
            $table->float('latNE', 16, 14)->nullable();
            $table->float('lngNE', 16, 14)->nullable();
            $table->float('latSW', 16, 14)->nullable();
            $table->float('lngSW', 16, 14)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('zones');
    }
}
