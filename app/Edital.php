<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edital extends Model
{

  protected $table = 'editals';
  protected $fillable=['nomeEdital'];

    public function relCompanhias(){
      return $this->hasMany('App\Companhia', 'id_edital');
    }

}
