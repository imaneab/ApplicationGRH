<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('badgenumber');
            $table->string('type_conge');
            $table->integer('nombre_jours');
            $table->integer('nombre_jours_consomes');
            $table->integer('nombre_jours_restants');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->date('date_retour');
            $table->string('remarque');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conges');
    }
}
