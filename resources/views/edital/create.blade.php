@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <br>    
    <form class="" name="formCad" id="formCada" action="{{url('editals')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Numero do edital</label>
        <input type="text" class="form-control" name="nomeEdital" id="nomeEdital" value="" required>
      </div>
      <input type="submit" class="btn btn-primary" name="" value="Cadastrar">
    </form>
  </div>
</div>
@endsection
