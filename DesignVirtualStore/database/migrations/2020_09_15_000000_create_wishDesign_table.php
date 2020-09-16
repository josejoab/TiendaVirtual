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
        Schema::create('wishDesigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('wishDesigns');
    }
}
