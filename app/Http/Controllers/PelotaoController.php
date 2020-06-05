<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelotao;
use App\Companhia;

class PelotaoController extends Controller
{
    private $objCompanhia;
    private $objPelotao;

    public function __construct(){
      $this->objPelotao=new Pelotao();
      $this->objCompanhia=new Companhia();
    }

    public function index()
    {
      $pelotaos = $this->objPelotao->all();
      return view('pelotao/home',compact('pelotaos'));
    }
    public function create(){
      $companhias=$this->objCompanhia->all();
      return view('pelotao/create',compact('companhias'));
    }
    public function store(Request $request){
      $this->objPelotao->create([
        'numeroPelotao'=>$request->numeroPelotao,
        'nomePelotao'=>$request->nomePelotao,
        'comandante'=>$request->comandante,
        'id_companhia'=>$request->id_companhia
      ]);
      return redirect('pelotao/home');
    }
    public function edit($id){
      $pelotao=$this->objPelotao->find($id);
      $companhia=$this->objCompanhia->all();

      return view('pelotao/edit', compact('pelotao', 'companhia'));
    }
    public function update(Request $request, $id){
      $this->objPelotao->where(['id'=>$id])->update([
        'numeroPelotao'=>$request->numeroPelotao,
        'nomePelotao'=>$request->nomePelotao,
        'comandante'=>$request->comandante,
        'id_companhia'=>$request->id_companhia
      ]);

      return redirect('pelotao/home');
    }



}
