<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelotao extends Model
{
    protected $table = 'pelotaos';
    protected $fillable=['numeroPelotao', 'nomePelotao', 'comandante', 'id_companhia'];

    public function relPelotaos(){
      return $this->hasOne('App\Companhia', 'id', 'id_companhia');
    }
    public function relAlunos(){
      return $this->hasMany('App\Aluno', 'id_pelotao');
    }
}
