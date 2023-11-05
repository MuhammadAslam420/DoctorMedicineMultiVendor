<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerscriptionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perscription_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('perscription_id')->unsigned();
            $table->bigInteger('pharmacist_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('product');
            $table->decimal('price');
            $table->decimal('discount');
            $table->decimal('tax');
            $table->decimal('total');
            $table->integer('days');
            $table->integer('qty');
            $table->timestamps();
            $table->foreign('perscription_id')->references('id')->on('perscriptions')->onDelete('cascade');
            $table->foreign('pharmacist_id')->references('id')->on('pharmacists')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perscription_products');
    }
}
