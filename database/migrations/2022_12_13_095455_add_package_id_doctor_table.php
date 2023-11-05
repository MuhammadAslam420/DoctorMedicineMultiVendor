<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPackageIdDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
            $table->foreignId('subscription_package_id')->constrained()->nullable();
            $table->enum('package_status',['default','silver','gold','diamond'])->default('default');
            $table->date('expire_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
            $table->foreignId('subscription_package_id')->constrained()->nullable();
            $table->enum('package_status', ['default', 'silver', 'gold', 'diamond'])->default('default');
            $table->date('expire_date')->nullable();
        });
    }
}
