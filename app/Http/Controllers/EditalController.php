<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edital;

class EditalController extends Controller
{
  private $objEdital;

  public function __construct(){
    $this->objEdital=new Edital();
}

public function index()
    {
      $editals = $this->objEdital->all();
      return view('edital/home',compact('editals'));
    }

    public function create(){
      $editals=$this->objEdital->all();
      return view('edital/create',compact('editals'));
    }

    public function store(Request $request){
      $this->objEdital->create([
        'nomeEdital'=>$request->nomeEdital
      ]);
      return redirect('edital/home');

    }

    public function edit($id){
      $edital=$this->objEdital->find($id);
      return view('edital/edit', compact('edital'));
    }
    public function update(Request $request, $id){
      $this->objEdital->where(['id'=>$id])->update([
        'nomeEdital'=>$request->nomeEdital
      ]);

      return redirect('edital/home');
    }
}
