<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 200);
            $table->integer('numero_aluno');
            $table->string('nomeDeGuerra', 70);
            $table->string('foto', 70)->nullable();
            $table->string('re', 70);
            $table->boolean('ativo')->default('1');
            $table->date('dataNasc');
            $table->unsignedBigInteger('id_pelotao')->unsigned();
            $table->foreign('id_pelotao')->references('id')->on('pelotaos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('alunos');
    }
}
