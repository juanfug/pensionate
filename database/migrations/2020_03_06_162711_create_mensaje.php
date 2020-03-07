<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('mensaje', function (Blueprint $table) {
            
            $table->increments('id_me');
            $table->timestamps();
            $table->string('imagen');
            $table->longtext('texto');
            $table->string('icono');
            $table->integer('rol_ope_id')->unsigned();
            $table->foreign('rol_ope_id')->references('idrop')->on('rol_operations')->onDelete('cascade');

            $table->integer('user_information_id')->unsigned();

            $table->foreign('user_information_id')->references('id')->on('user_information')->onDelete('cascade');

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('rol_id')->unsigned();

            $table->foreign('rol_id')->references('idr')->on('rol')->onDelete('cascade');
            $table->integer('rol_user_id')->unsigned();

            $table->foreign('rol_user_id')->references('id_ru')->on('rol_user')->onDelete('cascade');
             $table->integer('publication_id')->unsigned();

            $table->foreign('publication_id')->references('id_pu')->on('publication')->onDelete('cascade');

            });
                        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensaje');
    }
}
