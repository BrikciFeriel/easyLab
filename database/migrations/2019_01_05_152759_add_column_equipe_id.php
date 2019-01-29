<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnEquipeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipe_materiels', function (Blueprint $table) {
            $table-> integer('equipe_id')->nullable()->unsigned()->after('date_fin');
            $table-> foreign('equipe_id')->references('id')->on('equipes')->onDelete('set null');
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
            $table->dropForeign(['equipe_id']);
            $table->dropColumn('equipe_id');
        });
    }
}
