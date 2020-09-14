<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designOrders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->integer('subTotalPrice');
            $table->bigInteger('orderId')->unsigned();
            $table->foreign('orderId')->references('id')->on('orders');
            $table->bigInteger('designId')->unsigned();
            $table->foreign('designId')->references('id')->on('designs');
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
        Schema::dropIfExists('designOrders');
    }
}
