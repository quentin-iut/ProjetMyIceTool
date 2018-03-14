<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',20);
            $table->string('prenom',20);
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('telephone',20)->nullable();
            $table->boolean('abonne')->default(false);
            $table->boolean('alert')->default(false);
            $table->boolean('isAdmin')->default(false);
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->integer('cascade_id')->unsigned()->nullable();
            $table->integer('niveau_id')->unsigned()->nullable();
            $table->integer('langue_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('cascade_id')->references('id')->on('cascades');
            $table->foreign('niveau_id')->references('id')->on('niveaux');
            $table->foreign('langue_id')->references('id')->on('langues');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
}
