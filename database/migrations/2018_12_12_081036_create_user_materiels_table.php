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
            $table->integer('user_id')->unsigned();
            $table->integer('materiel_id')->unsigned();
            $table->timestamps();

            $table-> foreign('user_id')->references('id')->on('users')->onDelete('set null')->nullable();
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
        Schema::dropIfExists('user_materiels');
    }
}
