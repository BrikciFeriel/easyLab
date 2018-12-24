<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDateFinUserMateriels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_materiels', function (Blueprint $table) {
            $table->string('date_fin')->nullable()->after('date_debut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_materiels', function (Blueprint $table) {
             $table->dropColumn('date_fin');
        });
    }
}
