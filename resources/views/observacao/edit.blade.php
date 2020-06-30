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
  max-width: 150px;
}

.foir-assinatura{
  max-width: 100%;
  max-height: 100px;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}
.observacoes{
  background-color: #f8f9fa;
  padding: 10px;
  margin-top: 20px;
}
</style>
<div class="container">
  <div class="col-md">
<form class="row " name="formEdit" id="formEdit" method="POST" action="{{url("observacaos/$aluno->id")}}">
      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="col-sm-12 text-center"><h1 class="foir-titulo">FICHA DE OBSERVACAO INDIVIDUAL RESERVADA (FOIR)</h1></div>

      <div class="col-sm-2 foir-table text-center">
        <img class="foir-imagem" src={{url("/imagem-aluno/$aluno->foto")}} alt="" />


      </div>
      <div class="col-sm-1 foir-table text-center">

        <label for="name" class="foir-label">Nº {{$aluno->numero_aluno}}</label>
      </div>

      <div class="col-sm-3 foir-table">
        <label for="name" class="foir-label">Graduação: Sd PM 2ª Cl</label>
      </div>
      <div class="col-sm-6 foir-table" >
        <label for="name" class="foir-label">Nome: {{$aluno->nome}}</label>
      </div>
      <div class="col-sm-7 foir-table-down">
        <label for="name" class="foir-label">Nome de Guerra: <b>{{$aluno->nomeDeGuerra}}</b></label>
      </div>
      <div class="col-sm-5 foir-table foir-table-down">

        <label for="name" class="foir-label">RE: {{$aluno->re}}</label>
      </div>
      <div class="col-sm-12 text-center foir-titulo">
          <label for="" class="text-center">Observações</label>
      </div>

              <textarea type="text" name="descricao" class="foir-textarea" value="" required placeholder="Insira a observação do aluno"></textarea>

      <form class="" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <input type="text" class="form-control" name="graduacao" value="{{auth()->user()->posto_graduacao}}" required placeholder="Nome" hidden>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nome_graduado" value="{{auth()->user()->name}}" required placeholder="Nome" hidden>
              </div>

              <input type="text" name="re" class="form-control" required value="{{auth()->user()->re}}" hidden>
            </div>
            <input type="text" name="assinatura" id="assinatura" value="{{auth()->user()->assinatura}}" hidden>
            <div class="form-group">
          </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="" value="Cadastrar">
            </div>

            </form>


      </form>

      @foreach($observ as $observs)
      <div class="row observacoes">
        <div class="col-11">
          <label for=""> <b>{{$observs->graduacao}}  {{$observs->nome_graduado}}</b> em: {{date( 'd/m/Y' , strtotime($observs->created_at))}}</label>
          <p class="foir-textarea">{{$observs->descricao}}</p>
        </div>
        <div class="col-1 text-center">
          <img  class="foir-assinatura" src="{{url("/assinaturas/".$observs->assinatura)}}" alt="">
        </div>
      </div>
      @endforeach

<a href="{{url("$aluno->id/pdf")}}" target="_blank">Download PDF</a>
  </div>

  <script type="text/javascript">

  </script>

@endsection
