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
            $table->unsignedBigInteger('receipt_id');
            $table->unsignedBigInteger('service_id');
            $table->tinyInteger('duration')->unsigned();
            $table->decimal('price',10,3)->unsigned();
            $table->decimal('total',10,4)->unsigned();
            $table->string('description', 60)->nullable();
            $table->timestamps();

            $table->foreign('receipt_id')->references('id')->on('receipts');
            $table->foreign('service_id')->references('id')->on('services');
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
