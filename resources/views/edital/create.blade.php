@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <div class="col-md">
    <form class="" name="formCad" id="formCada" action="{{url('editals')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Numero do edital</label>
        <input type="text" name="nomeEdital" id="nomeEdital" value="" required>
      </div>
      <input type="submit" class="btn" name="" value="Cadastrar">
    </form>
  </div>
</div>
@endsection
