<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('employees')){
            Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->foreignId('idUser');
                $table->string('rfc');
                $table->string('address');
                $table->string('workplace');
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
        Schema::dropIfExists('employees');
    }
}
