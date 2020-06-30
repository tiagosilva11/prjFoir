<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Aluno;
use App\Observacao;
use App\Pelotao;
use PDF;

class PDFController extends Controller
{
  private $objAluno;
  private $objPelotao;
  public function __construct(){
    $this->objAluno=new Aluno();
    $this->objPelotao=new Pelotao();
  }

    public function index($id)
    {
      $aluno=$this->objAluno->find($id);
      $observ=Observacao::select('*')
      ->join('alunos', 'observacaos.id_observacao', '=', 'alunos.id')
      ->where('alunos.id', $id)
      ->get();

      return view('observacao/pdf', compact('observ', 'aluno'));
    }
    public function pelotaos($id)
    {
//SELECT * from alunos INNER JOIN pelotaos on pelotaos.id = alunos.id_pelotao INNER JOIN observacaos on observacaos.id_observacao = alunos.id WHERE pelotaos.id = 1
      $observ=Aluno::select('*')
      ->join('pelotaos', 'alunos.id_pelotao' , 'pelotaos.id')
      ->join('observacaos', 'alunos.id' , 'observacaos.id_observacao')
      ->where('pelotaos.id', $id)
      ->get();

      return view('pelotao/pdfPelotao', compact('observ'));
    }

}
