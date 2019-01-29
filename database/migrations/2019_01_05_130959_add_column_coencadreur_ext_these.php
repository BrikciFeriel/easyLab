<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCoencadreurExtThese extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('theses', function (Blueprint $table) {
            $table->integer('coencadreur_ext_id')->unsigned()->nullable()->after('coencadreur_int');
            $table-> foreign('coencadreur_ext_id')->references('id')->on('contacts')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('theses', function (Blueprint $table) {
            $table->dropForeign(['coencadreur_ext_id']);
            $table->dropColumn('coencadreur_ext_id');
        });
    }
}
