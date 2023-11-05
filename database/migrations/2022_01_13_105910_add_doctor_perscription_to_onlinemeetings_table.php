<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDoctorPerscriptionToOnlinemeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('onlinemeetings', function (Blueprint $table) {
            //
            $table->string('doctor_perscription')->after('join_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('onlinemeetings', function (Blueprint $table) {
            //
            $table->string('doctor_perscription')->after('join_url')->nullable();
        });
    }
}
