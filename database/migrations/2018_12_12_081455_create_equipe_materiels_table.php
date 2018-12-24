<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipeMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipe_materiels', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('equipe_id')->unsigned();
            $table->integer('materiel_id')->unsigned();
            $table->timestamps();

             $table-> foreign('equipe_id')->references('id')->on('equipes')->onDelete('set null')->nullable();
            $table-> foreign('materiel_id')->references('id')->on('materiels')->onDelete('set null')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipe_materiels');
    }
}
