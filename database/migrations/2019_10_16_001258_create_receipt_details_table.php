<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_details', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('receipts_id');
            $table->unsignedBigInteger('services_id');
            $table->tinyInteger('duration')->unsigned();
            $table->decimal('price',10,3)->unsigned();
            $table->decimal('total',10,4)->unsigned();
            $table->string('address',60);
            $table->string('description', 60)->nullable();
            $table->timestamps();

            $table->foreign('receipts_id')->references('id')->on('receipts');
            $table->foreign('services_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipt_details');
    }
}
