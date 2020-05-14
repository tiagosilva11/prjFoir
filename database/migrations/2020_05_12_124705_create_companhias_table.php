<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanhiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('companhias', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name', 30);
          $table->text('description')->nullable();
          $table->integer('id_edital')->unsigned();
          $table->foreign('id_edital')->references('id')->on('editals')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('companhias');
    }
}
