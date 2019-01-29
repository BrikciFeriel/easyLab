<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_materiels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date_debut')->nullable();
            $table->string('date_fin')->nullable();
            $table->timestamps();

            /*$table-> foreign('user_id')->references('id')->on('users')->onDelete('set null')->nullable();
            $table-> foreign('materiel_id')->references('id')->on('materiels')->onDelete('set null')->nullable();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_materiels');
    }
}
