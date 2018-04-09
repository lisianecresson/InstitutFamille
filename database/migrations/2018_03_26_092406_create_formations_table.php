<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titre');
            $table->string('slug');
            $table->integer('typeFormation_id')->unsigned();
            $table->text('description')->nullable();
            $table->text('temps')->nullable();
            $table->text('public')->nullable();
            $table->text('objectif')->nullable();
            $table->text('programme')->nullable();
            $table->text('theorique')->nullable();
            $table->text('methode')->nullable();
            $table->text('conditions')->nullable();
            $table->text('prix')->nullable();

        });

        Schema::create('formation_lieus', function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->integer('formation_id')->unsigned()->index();
            $table->integer('lieu_id')->unsigned()->index();
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
            $table->foreign('lieu_id')->references('id')->on('lieus')->onDelete('cascade');
            $table->date('dateDebut')->nullable();
            $table->date('dateFin')->nullable();
            $table->integer('formateur_id')->unsigned()->nullable();
        });

        Schema::create('formateur_formation_lieu', function(Blueprint $table){
            $table->increments('id');
            $table->integer('formation_lieu_id')->unsigned()->index();
            $table->integer('formateur_id')->unsigned()->index();
            $table->foreign('formation_lieu_id')->references('id')->on('formation_lieus')->onDelete('cascade');
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
