@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style media="screen">
.foir-table{
  border: 2px solid black !important;

}
.invisible{
  visible: false !important;
}
.foir-table-down{
  border: 2px solid black !important;
  border-top: 0px !important;
}
.foir-label{
  width: 100%;
  float: left;
  margin: 10px 0px;
  text-align: center;
}
.foir-titulo{
  margin-top: 20px;
  font-weight: bold;
  font-size: 18px !important;
}
.foir-imagem{
  max-height: 200px;
  max-width: 200px;
}
</style>

<div class="container">
<div  id="conteudo">
    <div class="col-sm-12 text-center"><h1 class="foir-titulo">FICHA DE OBSERVACAO INDIVIDUAL RESERVADA (FOIR)</h1></div>
    @foreach($alunos as $aluno)

  
    @endforeach
    <div class="col-sm-12 text-center foir-titulo">
        <label for="" class="text-center">Observações</label>
    </div>


<h1 style="color: black">Teste de texto</h1>
</container>
@endsection
