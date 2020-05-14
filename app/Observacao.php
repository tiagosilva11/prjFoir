<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observacao extends Model
{
  protected $table = 'observacaos';
  protected $fillable=['descricao', 'id_observacao'];

  public function relObsAlunos(){
    return $this->hasOne('App\Aluno', 'id', 'id_observacao');
  }
}
