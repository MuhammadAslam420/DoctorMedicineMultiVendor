<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned()->nullable();
            $table->string('firstname');
            $table->string('slug');
            $table->string('degree');
            $table->string('license_no');
            $table->text('about_self')->nullable();
            $table->text('experience');
            $table->string('clinic_address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->decimal('checkup_fees');
            $table->decimal('discount')->nullable();
            $table->string('degree_certificate');
            $table->string('other_sertificate')->nullable();
            $table->enum('admin_approval',[1,0])->default(0);
            $table->string('profileImage');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
