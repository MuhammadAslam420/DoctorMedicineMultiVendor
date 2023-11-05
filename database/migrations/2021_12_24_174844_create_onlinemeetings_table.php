<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlinemeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlinemeetings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("doctor_id")->references('id')->on('doctors')->onDelete('cascade');
            $table->foreignId("users_id")->references('id')->on('users')->onDelete('cascade');
            $table->string('meeting_id');
            $table->text('topic');
            $table->dateTime('start_at')->unique();
            $table->integer('duration')->comment('minutes');
            $table->string('password')->comment('meeting_password');
            $table->text('start_url');
            $table->text('join_url');
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
        Schema::dropIfExists('onlinemeetings');
    }
}
