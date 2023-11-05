<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_reviews', function (Blueprint $table) {
                $table->id();
                $table->integer('rating');
                $table->integer('behaviour');
                $table->integer('waiting_time');
                $table->text('comment');
                $table->bigInteger('onlinemeeting_id')->unsigned();
                $table->timestamps();
                $table->foreign('onlinemeeting_id')->references('id')->on('onlinemeetings')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_reviews');
    }
}
