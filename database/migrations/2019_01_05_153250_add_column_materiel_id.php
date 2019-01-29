<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMaterielId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipe_materiels', function (Blueprint $table) {
             $table-> integer('materiel_id')->nullable()->unsigned()->after('date_fin');
            $table-> foreign('materiel_id')->references('id')->on('materiels')->onDelete('set null');
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
            $table->dropForeign(['materiel_id']);
            $table->dropColumn('materiel_id');
        });
    }
}
