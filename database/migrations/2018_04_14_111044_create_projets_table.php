<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intitule',70)->nullable();
            $table->string('resume',300)->nullable();
            $table->string('photo')->nullable();
            $table->string('type',45)->nullable();
            $table->string('theme')->nullable();
            $table->string('lien',100)->nullable();
            $table->string('detail')->nullable();
            $table->datetime('date_debut')->nullable();
            $table->datetime('date_fin')->nullable();
            $table->datetime('deleted_at')->nullable();

            $table->timestamps();

            $table-> integer('chef_id')->unsigned()->nullable();
            $table-> foreign('chef_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
