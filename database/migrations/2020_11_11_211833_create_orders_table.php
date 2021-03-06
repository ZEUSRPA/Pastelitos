<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('orders')){
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->date('orderDate');
                $table->integer('payMethod');
                $table->date('dueDate');
                $table->foreignId('idEmployee');
                $table->foreignId('idUser');
                $table->integer('status');//1.-preparando 2.-Listo
                $table->foreign('idEmployee')->references('id')->on('employees');
                $table->foreign('idUser')->references('id')->on('users');
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
        Schema::dropIfExists('orders');
    }
}
