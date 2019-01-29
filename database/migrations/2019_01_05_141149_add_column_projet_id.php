<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProjetId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projets_contacts', function (Blueprint $table) {
            $table-> integer('projet_id')->nullable()->unsigned()->after('id');
            $table-> foreign('projet_id')->references('id')->on('projets')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projets_contacts', function (Blueprint $table) {
            $table->dropForeign(['projet_id']);
            $table->dropColumn('projet_id');
        });
    }
}
