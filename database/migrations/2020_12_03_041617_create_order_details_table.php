<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('order_details')){
            Schema::create('order_details', function (Blueprint $table) {
                $table->id();
                $table->foreignId('idOrder');
                $table->foreignId('idCake');
                $table->float('price');
                $table->integer('quantity');
                $table->foreign('idOrder')->references('id')->on('orders');
                $table->foreign('idCake')->references('id')->on('cakes');
                $table->timestamps();
                $table->softDeletes();
            });
            
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
