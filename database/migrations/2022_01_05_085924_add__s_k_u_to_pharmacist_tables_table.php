<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSKUToPharmacistTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pharmacist_tables', function (Blueprint $table) {
            //
            $table->string('SKU');
            $table->string('slug')->after('name');
            $table->integer('quantity')->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pharmacist_tables', function (Blueprint $table) {
            //
            $table->string('SKU');
            $table->string('slug')->after('name');
            $table->integer('quantity')->after('price');
        });
    }
}
