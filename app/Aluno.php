<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $fillable=['nome', 'nomeDeGuerra', 're', 'id_pelotao', 'dataNasc'];

    public function relAlunosPel(){
      return $this->hasOne('App\Pelotao', 'id', 'id_pelotao');
    }
    public function relObservacao(){
      return $this->hasMany('App\Observacao', 'id_observacao');
    }
}
