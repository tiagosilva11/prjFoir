<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricao', 255);
            $table->string('graduacao', 255);
            $table->string('RE', 255);
            $table->string('nome_graduado', 255);
            $table->string('assinatura', 70)->nullable();
            $table->integer('id_observacao')->unsigned();
            $table->foreign('id_observacao')->references('id')->on('alunos')->onDelete('cascade')->onUpdate('cascade');
            //$table->integer('id_prof_observacao')->unsigned();
            //$table->foreign('id_prof_observacao')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('observacaos');
    }
}
