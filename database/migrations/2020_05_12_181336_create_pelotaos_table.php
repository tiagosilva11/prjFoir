<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelotaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('pelotaos', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('numeroPelotao', 30);
             $table->string('nomePelotao', 70);
             $table->string('comandante', 70);
             $table->integer('id_companhia')->unsigned();
             $table->foreign('id_companhia')->references('id')->on('companhias')->onDelete('cascade')->onUpdate('cascade');
             $table->timestamps();
             $table->softDeletes();
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('pelotaos');
     }
}
