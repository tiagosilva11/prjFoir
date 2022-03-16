<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companhia;
use App\Edital;

class CompanhiaController extends Controller
{
  private $objEdital;
  private $objCompanhia;

  public function __construct(){
    $this->objEdital=new Edital();
    $this->objCompanhia=new Companhia();
  }



  public function index()
      {

        $companhias = $this->objCompanhia->all();
        return view('companhia/home',compact('companhias'));
      }

public function create(){
  $editais=$this->objEdital->all();
  
  
  
  return view('companhia/create',compact('editais'));
}

public function store(Request $request){
  $this->objCompanhia->create([
    'name'=>$request->name,
    'description'=>$request->description,
    'id_edital'=>$request->id_edital
  ]);
  return redirect('companhia/home');
}

public function edit($id){
  $companhia=$this->objCompanhia->find($id);
  $edital=$this->objEdital->all();

  return view('companhia/edit', compact('companhia', 'edital'));
}
public function update(Request $request, $id){
  $this->objCompanhia->where(['id'=>$id])->update([
    'name'=>$request->name,
    'description'=>$request->description,
    'id_edital'=>$request->id_edital
  ]);

  return redirect('home');
}
}
