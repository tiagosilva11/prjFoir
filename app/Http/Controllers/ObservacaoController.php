<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Observacao;
use App\User;

class ObservacaoController extends Controller
{
    private $objAluno;
    private $objObservacao;
    private $objUser;

    public function __construct(){
      $this->objAluno=new Aluno();
      $this->objObservacao=new Observacao();
      $this->objUser=new User();
    }

    public function index()
    {
      $obsercacaos = $this->objObservacao->all();
      return view('observacao/home',compact('observacaos'));
    }

  public function create(){
    $alunos=$this->objAluno->all();
    return view('observacao/create',compact('alunos'));
  }

  public function store(Request $request){
    $this->objCompanhia->create([
      'descricao'=>$request->descricao,
      'id_aluno'=>$request->id_aluno,
      'graduacao'=>$request->graduacao,
      'nome_graduado'=>$request->nome_graduado,
      're'=>$request->re
    ]);
  }


  public function edit($id){
    $aluno=$this->objAluno->find($id);
    $observ=Observacao::select('*')
    ->join('alunos', 'observacaos.id_observacao', '=', 'alunos.id')
    ->where('alunos.id', $id)
    ->get();

    return view('observacao/edit', compact('observ', 'aluno'));
  }


  public function update(Request $request, $id){

    $this->objObservacao->create([
      'descricao'=>$request->descricao,
      'id_observacao'=>$id,
      'graduacao'=>$request->graduacao,
      'nome_graduado'=>$request->nome_graduado,
      're'=>$request->re,
      'assinatura'=>$request->assinatura
    ]);


    return redirect('observacao/'.$id.'/edit');
  }




  //public function edit($id){
  //  $companhia=$this->objCompanhia->find($id);
    //$edital=$this->objEdital->all();

    //return view('companhia/edit', compact('companhia', 'edital'));
  //}
  //public function update(Request $request, $id){
    //$this->objCompanhia->where(['id'=>$id])->update([
      //'name'=>$request->name,
      //'description'=>$request->description,
      //'id_edital'=>$request->id_edital
  //  ]);

    //return redirect('home');
  //}

}
