<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->string('prenom',45)->nullable();
            $table->string('email')->nullable();
            $table->string('num_tel')->nullable();
            $table->string('matiere_cooperation')->nullable();
            $table->timestamps();

            $table-> foreign('partenaire_id')->references('id')->on('partenaires')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
