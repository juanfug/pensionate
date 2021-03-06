<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolOperations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_operations', function (Blueprint $table) {

            $table->increments('idrop');
            $table->timestamps();

            $table->integer('rol_id')->unsigned();

            $table->foreign('rol_id')->references('idr')->on('rol')->onDelete('cascade');

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_operations');
    }
}
