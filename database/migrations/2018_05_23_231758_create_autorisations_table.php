<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorisations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('badgenumber');
            $table->integer('nombre_jours');
            $table->date('date_debut');
            $table->date('date_retour');
            $table->string('moyen_transport');
            $table->string('endroit_mission');
            $table->integer('situation');

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
        Schema::drop('autorisations');
    }
}
