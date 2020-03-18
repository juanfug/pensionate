<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {

            $table->increments('id_pu');
            $table->timestamps();
            $table->string('imagen');
            $table->longtext('descripcion');
            $table->string('cuadrocomentario');
            $table->string('fechapublicacion');

            $table->integer('rol_ope_id')->unsigned();
            $table->foreign('rol_ope_id')->references('idrop')->on('roles_operations')->onDelete('cascade');

            $table->integer('user_information_id')->unsigned();

            $table->foreign('user_information_id')->references('id')->on('users_information')->onDelete('cascade');

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('rol_id')->unsigned();

            $table->foreign('rol_id')->references('idr')->on('roles')->onDelete('cascade');
            $table->integer('rol_user_id')->unsigned();

            $table->foreign('rol_user_id')->references('id_ru')->on('roles_user')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
