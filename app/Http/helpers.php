<?php

use App\Pelotao;

 function __construct(){
  $this->objPelotao=new Pelotao();
}

function mostrarDados(){
  $showpelotaos = Pelotao::orderBy('id', 'desc')->all();
  return view('layouts.menus',compact('showpelotaos'));
}

  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->isAdmin);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }


  function getMyPermission($id)
  {
    switch ($id) {
      case 1:
        return 'admin';
        break;
      default:
        return 'user';
        break;
    }
  }


?>
