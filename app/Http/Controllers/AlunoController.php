<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelotao;
use App\Aluno;
use Illuminate\Support\Facades\Input;


use File;

class AlunoController extends Controller
{
  private $objPelotao;
  private $objAluno;

  public function __construct(){
    $this->objAluno=new Aluno();
    $this->objPelotao=new Pelotao();
  }

  public function index()
  {
    $alunos = $this->objAluno->all();
    return view('aluno/home',compact('alunos'));
  }

  public function retornaId($id)
  {
    $pelotao=$this->objPelotao->all();
    $alunos = Pelotao::select('*')
    ->join('alunos', 'pelotaos.id', '=', 'alunos.id_pelotao')
    ->where('alunos.id_pelotao', $id)
    ->get();
    return view('aluno/home',compact('alunos', 'pelotao'));
  }

  public function create(){
    $pelotaos=$this->objPelotao->all();
    return view('aluno/create',compact('pelotaos'));
  }

  public function store(Request $request){
$foto = $request->foto;
  $extensao = $foto->getClientOriginalExtension();

    if (Input::file($request->foto)) {

      if ($extensao != 'jpg' && $extensao != 'png') {
        return back()->with("erro", "Erro ao inserir imagem");
      }
    }
      $this->objAluno->create([
        'nome'=>$request->nome,
        'nomeDeGuerra'=>$request->nomeDeGuerra,
        're'=>$request->re,
        'numero_aluno'=>$request->numero_aluno,
        'ativo'=>$request->ativo,
        'id_pelotao'=>$request->id_pelotao,
        'foto'=>$request->re.".".$extensao,
        'dataNasc'=>$request->dataNasc
      ]);

      File::move($foto,public_path()."/imagem-aluno/".$request->re.".".$extensao);



      return redirect('aluno/home');
  }
  public function edit($id){
  $aluno=$this->objAluno->find($id);
  $pelotao=$this->objPelotao->all();

  return view('aluno/edit', compact('aluno', 'pelotao'));
  }
  public function update(Request $request, $id){
  $this->objAluno->where(['id'=>$id])->update([
    'nome'=>$request->nome,
    'nomeDeGuerra'=>$request->nomeDeGuerra,
    're'=>$request->re,
    'id_pelotao'=>$request->id_pelotao,
    'dataNasc'=>$request->dataNasc
  ]);

  return redirect('aluno/home');
  }
}
