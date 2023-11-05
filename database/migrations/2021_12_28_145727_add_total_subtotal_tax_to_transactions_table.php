<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalSubtotalTaxToTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
            $table->decimal('subtotal')->nullable;
            $table->decimal('tax')->nullable;
            $table->decimal('total')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
            $table->decimal('subtotal')->nullable;
            $table->decimal('tax')->nullable;
            $table->decimal('total')->nullable;
        });
    }
}
