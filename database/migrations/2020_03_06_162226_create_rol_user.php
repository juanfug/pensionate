<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            
        Schema::create('rol_user', function (Blueprint $table) {
            $table->increments('id_ru');
            $table->timestamps();
            $table->string('nombre');

            $table->integer('user_information_id')->unsigned();

            $table->foreign('user_information_id')->references('id')->on('user_information')->onDelete('cascade');

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
        Schema::dropIfExists('rol_user');
    }
}
