<?php
/**
    *Autor: Kevin Herrera
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishDesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wish_designs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('wishList_id')->unsigned();
            $table->foreign('wishList_id')->references('id')->on('wish_lists');
            $table->bigInteger('design_id')->unsigned();
            $table->foreign('design_id')->references('id')->on('designs');
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
        Schema::dropIfExists('wish_designs');
    }
}
