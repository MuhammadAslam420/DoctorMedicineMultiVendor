<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacist_tables', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('phr_id')->unsigned();
            $table->string('name')->nullable();
            $table->decimal('price')->nullable();
            $table->text('description')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('manufacture_name')->nullable();
            $table->integer('weight')->nullable();
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
        Schema::dropIfExists('pharmacist_tables');
    }
}
