<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPartenaireIdContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {

        $table->integer('partenaire_id')->unsigned()->nullable()->after('photo');
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
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign(['partenaire_id']);
            $table->dropColumn('partenaire_id');
        });
    }
}
