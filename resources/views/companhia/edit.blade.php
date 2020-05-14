@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <div class="col-md">
    <form class="" name="formEdit" id="formEdit" method="POST" action="{{url("companhias/$companhia->id")}}">

      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="form-group">
        <label for="name">Numero da companhia</label>
        <input type="text" name="name" id="name" value="{{$companhia->name}}" required>
      </div>
      <div class="form-group">
        <label for="name">Edital correspondente</label>
        <select class="" name="id_edital" id="id_edital" required>

            @foreach($edital as $editais)
              <option value="{{$editais->id}}">{{$editais->nomeEdital}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Descrição</label>
        <input type="text" name="description" value="{{$companhia->description}}" id="description">
      </div>
      <input type="submit" class="btn" name="" value="Cadastrar">
    </form>
  </div>
</div>
@endsection
