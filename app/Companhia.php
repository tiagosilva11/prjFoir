<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companhia extends Model
{

  protected $table = 'companhias';
  protected $fillable=['name', 'description', 'id_edital'];

  public function relCompanhias(){
    return $this->hasMany('App\Pelotao', 'id_companhia');
  }

  public function relEditals(){
    return $this->hasOne('App\Edital', 'id', 'id_edital');
  }
}
