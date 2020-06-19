<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Aluno;
use App\Observacao;
use PDF;

class PDFController extends Controller
{private $objAluno;
  public function __construct(){
    $this->objAluno=new Aluno();
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
}
