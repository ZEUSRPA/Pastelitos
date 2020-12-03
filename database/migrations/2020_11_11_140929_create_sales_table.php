<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('sales')){
            Schema::create('sales', function (Blueprint $table) {
                $table->id();
                $table->date('saleDate');
                $table->integer('payMethod');//1.-Efectivo 2.-Tarjeta
                $table->foreignId('idEmployee');
                $table->foreignId('idUser');
                $table->foreignId('idCoupon');
                $table->foreign('idUser')->references('id')->on('users');
                $table->foreign('idEmployee')->references('id')->on('employees');
                $table->foreign('idCoupon')->references('id')->on('coupons');
                $table->timestamps();
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
        Schema::dropIfExists('sales');
    }
}
