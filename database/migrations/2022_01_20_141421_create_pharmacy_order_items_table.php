<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_order_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('pharmacist_id')->unsigned();
            $table->bigInteger('pharmacy_order_id')->unsigned();
            $table->decimal('price');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('pharmacist_tables')->onDelete('cascade');
            $table->foreign('pharmacist_id')->references('id')->on('pharmacists')->onDelete('cascade');
            $table->foreign('pharmacy_order_id')->references('id')->on('phramacy_orders')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacy_order_items');
    }
}
