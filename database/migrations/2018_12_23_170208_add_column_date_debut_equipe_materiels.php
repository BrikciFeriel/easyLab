<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDateDebutEquipeMateriels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipe_materiels', function (Blueprint $table) {
             $table->string('date_debut')->nullable()->after('materiel_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipe_materiels', function (Blueprint $table) {
             $table->dropColumn('date_debut');
        });
    }
}
