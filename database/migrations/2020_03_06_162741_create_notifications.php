<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id_no');
            $table->timestamps();
            $table->string('imagen');
            $table->longtext('texto');
            $table->string('cuadrocomentario');
            $table->string('calificacion');

            $table->integer('mensaje_id')->unsigned();
            $table->foreign('mensaje_id')->references('id_me')->on('mensajes')->onDelete('cascade');

            $table->integer('user_information_id')->unsigned();

            $table->foreign('user_information_id')->references('id')->on('users_information')->onDelete('cascade');

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('rol_id')->unsigned();

            $table->foreign('rol_id')->references('idr')->on('roles')->onDelete('cascade');
            $table->integer('rol_user_id')->unsigned();

            $table->foreign('rol_user_id')->references('id_ru')->on('roles_user')->onDelete('cascade');
             $table->integer('publication_id')->unsigned();

            $table->foreign('publication_id')->references('id_pu')->on('publications')->onDelete('cascade');


            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');    }
}
