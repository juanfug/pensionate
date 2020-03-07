<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {

            $table->increments('idm');
            $table->timestamps();
            $table->string('nombre');



            $table->integer('ope_id')->unsigned();
            $table->foreign('ope_id')->references('idop')->on('operations')->onDelete('cascade');
            $table->integer('rol_ope_id')->unsigned();
            $table->foreign('rol_ope_id')->references('idrop')->on('rol_operations')->onDelete('cascade');

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
        Schema::dropIfExists('modulos');
    }
}
