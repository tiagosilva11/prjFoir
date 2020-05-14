@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <div class="col-md">
    <form class="" name="formCad" id="formCada" action="{{url('companhias')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Numero da companhia</label>
        <input type="text" name="name" id="name" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Edital correspondente</label>
        <select class="" name="id_edital" id="id_edital" required>
          <option value="">Selecione</option>
            @foreach($editais as $edital)
              <option value="{{$edital->id}}">{{$edital->nomeEdital}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Descrição</label>
        <input type="text" name="description" value="" id="description">
      </div>
      <input type="submit" class="btn" name="" value="Cadastrar">
    </form>
  </div>
</div>
@endsection
