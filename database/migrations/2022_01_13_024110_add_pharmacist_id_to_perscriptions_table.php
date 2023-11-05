<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPharmacistIdToPerscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perscriptions', function (Blueprint $table) {
            //
            $table->bigInteger('pharmacist_id')->unsigned()->after('user_id')->nullable();
            $table->foreign('pharmacist_id')->references('id')->on('perscriptions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perscriptions', function (Blueprint $table) {
            //
            $table->bigInteger('pharmacist_id')->unsigned()->after('user_id')->nullable();
            $table->foreign('pharmacist_id')->references('id')->on('perscriptions')->onDelete('cascade');
        });
    }
}
