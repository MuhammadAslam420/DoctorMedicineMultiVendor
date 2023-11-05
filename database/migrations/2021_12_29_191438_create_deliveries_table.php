<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('deliveryboy_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('orderitem_id')->unsigned();
            $table->bigInteger('shipping_id')->unsigned();
            $table->enum('status',['ordered','process','dispatch','deliverd'])->default('process');
            $table->bigInteger('supplier_id')->unsigned();
            $table->timestamps();
            $table->foreign('deliveryboy_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('orderitem_id')->references('id')->on('order_items')->onDelete('cascade');
            $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
