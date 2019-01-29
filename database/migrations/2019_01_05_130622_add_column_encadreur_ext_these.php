<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnEncadreurExtThese extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('theses', function (Blueprint $table) {
            $table->integer('encadreur_ext_id')->unsigned()->nullable()->after('encadreur_int');
            $table-> foreign('encadreur_ext_id')->references('id')->on('contacts')->onDelete('set null');
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
            $table->dropForeign(['encadreur_ext_id']);
            $table->dropColumn('encadreur_ext_id');
        });
    }
}
