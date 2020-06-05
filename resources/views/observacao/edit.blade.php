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

      <div class="col-sm-2 foir-table">
        <label for="name" class="foir-label">Graduação: Sd PM 2ª Cl</label>
      </div>
      <div class="col-sm-7 foir-table" >
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

      <form class="">


              <div class="form-group">
              <select class="form-control" name="graduacao" id="graduacao" required placeholder="Graduação">

                <option value="Soldado">Soldado</option>
                <option value="Cabo">Cabo</option>
                <option value="3º Sargento">3º Sargento</option>
                <option value="2º Sargento">2º Sargento</option>
                <option value="1º Sargento">1º Sargento</option>
                <option value="SubTenente">SubTenente</option>
                <option value="Aspirante">Aspirante</option>
                <option value="2º Tenente">2º Tenente</option>
                <option value="1º Tenente">1º Tenente</option>
                <option value="Capitão">Capitão</option>
                <option value="Major">Major</option>
                <option value="Tenente-Coronel">Tenente-Coronel</option>
                <option value="Coronel">Coronel</option>
              </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nome_graduado" value="" required placeholder="Nome">
              </div>
              <div class="form-group">
              <input type="text" name="re" value="" class="form-control" required placeholder="RE">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="" value="Cadastrar">
            </div>

            </form>

          </div>
      </form>
          <form>
      <div class="">


      @foreach($observ as $observs)
      <label for=""> <b>{{$observs->graduacao}}  {{$observs->nome_graduado}}</b> em: {{date( 'd/m/Y' , strtotime($observs->created_at))}}</label>
      <p class="foir-textarea">{{$observs->descricao}}</p>
      @endforeach
      </div>
<div class="editor" id="editor">
<button type="button" value="Print this page" id="btGerarPDF">Gerar</button>
</div>
</form>
  </div>

  <div class="invisible" id="conteudo">
    <div class="col-sm-12 text-center"><h1 class="foir-titulo">FICHA DE OBSERVACAO INDIVIDUAL RESERVADA (FOIR)</h1></div>
    <label for="">{{$aluno->foto}}</label>
    <div class="col-sm-1 foir-table text-center">
      <label for="name" class="foir-label">Nº {{$aluno->numero_aluno}}</label>
    </div>
    <div class="col-sm-3 foir-table">
      <label for="name" class="foir-label">Graduação: Sd PM 2ª Cl</label>
    </div>
    <div class="col-sm-8 foir-table" >
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

  </div>
  <script type="text/javascript">
    var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

    $('#btGerarPDF').click(function () {
        doc.fromHTML($('#conteudo').html(), 15, 15, {
            'width': 170,
                'elementHandlers': specialElementHandlers
        });
        doc.save('exemplo-pdf.pdf');
    });

  </script>

@endsection
