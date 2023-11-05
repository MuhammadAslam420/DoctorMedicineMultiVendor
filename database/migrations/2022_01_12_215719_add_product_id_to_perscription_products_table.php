<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductIdToPerscriptionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perscription_products', function (Blueprint $table) {
            //
            $table->bigInteger('product_id')->unsigned()->after('user_id');
            $table->foreign('product_id')->references('id')->on('perscription_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perscription_products', function (Blueprint $table) {
            //
            $table->bigInteger('product_id')->unsigned()->after('user_id');
            $table->foreign('product_id')->references('id')->on('perscription_products')->onDelete('cascade');
        });
    }
}
