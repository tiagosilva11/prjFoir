@extends('layouts.app')
@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style media="print">
@media print {
*{
  background: transparent;
  color: #000;
  text-shadow: none;
  filter: none;
  -ms-filter: none;
}
@page{
  margin: 2cm 2cm 2cm 3cm;
}
.foir-table{
  border: 1px solid black !important;
}
.invisible{
  visible: false !important;
}
.foir-table-down{
  border: 2px solid black !important;
  border-top: 0px !important;
}

.foir-titulo{
  margin-top: 35px;
  margin-bottom: 40px;
  font-weight: bold;
  font-size: 28px !important;
}
.foir-imagem{
  max-height: 250px;
  max-width: 200px;
}
.foir-label{
  font-size: 24px !important;
}
.pdf-imprimir{
  color: black
}
.foir-assinatura{
  max-width: 100%;
  max-height: 100px;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}
.foir-textarea{
  color: black !important;
}
}
</style>
@foreach($observ as $aluno)
<div class="" style="page-break-after:always">
  <div class="col-sm-12 text-center"><h1 class="foir-titulo">FICHA DE OBSERVACAO INDIVIDUAL RESERVADA (FOIR)</h1></div>
  <div class="row">
    <div class="col-4">
      <img class="foir-imagem" src={{url("/imagem-aluno/$aluno->foto")}} alt="" />
    </div>
    <div class="col-8">
    <div class="col-3">
      <label for="name" class="foir-label">Nº {{$aluno->numero_aluno}}</label>
    </div>
    <div class="col-5">
      <label for="name" class="foir-label">RE: {{$aluno->re}}</label>
    </div>
    <div class="col-12">
      <label for="name" class="foir-label">Graduação: Sd PM 2ª Cl</label>
    </div>
    <div class="col-12">
      <label for="name" class="foir-label">Nome de Guerra: <b>{{$aluno->nomeDeGuerra}}</b></label>
    </div>
      <div class="col-12">
      <label for="name" class="foir-label ">Nome: {{$aluno->nome}}</label>
    </div>
    </div>
  </div>

<div class="row observacoes">
  <div class="col-11">

    <p class="foir-textarea">{{$aluno->descricao}}</p>
  </div>
  <div class="col-1 text-center">

  </div>
</div>
</div>
  @endforeach


@endsection
