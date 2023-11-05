<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhramacyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phramacy_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pharmacist_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->decimal('subtotal');
            $table->decimal('dsicount')->default(0);
            $table->decimal('tax');
            $table->decimal('total');
            $table->string('status')->default('COS');
            $table->timestamps();
            $table->foreign('pharmacist_id')->references('id')->on('pharmacists')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('pharmacist_tables')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phramacy_orders');
    }
}
