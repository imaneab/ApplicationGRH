<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFonctionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctionnaires', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('badgenumber');
            $table->string('nom');
            $table->string('prenom');
            $table->string('fonction');
            $table->string('division');
            $table->string('genre');
            $table->string('CIN');
            $table->string('service');
            $table->date('date_affectation');
            $table->date('date_entree_administration');
            $table->string('grade');
            $table->date('date_grade');
            $table->string('echelle');
            $table->string('echelon');
            $table->date('date_echelon');
            $table->string('situation_familiale');
            $table->string('budget');
            $table->string('niveau_scolaire');
            $table->string('nom_complet_conjoint');
            $table->string('fonction_conjoint');
            $table->integer('nombre_enfants');
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('diplome');
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
        Schema::drop('fonctionnaires');
    }
}
