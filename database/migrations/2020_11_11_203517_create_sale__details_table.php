<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('sale_details')){
            Schema::create('sale_details', function (Blueprint $table) {
                $table->id();
                $table->foreignId('idSale');
                $table->foreignId('idCake');
                $table->float('price');
                $table->integer('quantity');
                $table->foreign('idSale')->references('id')->on('sales');
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
        Schema::dropIfExists('sale_details');
    }
}
