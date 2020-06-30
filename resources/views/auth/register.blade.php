@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="">
        <div class="">
            <div class="">
                <div class="panel-heading text-center">Registrar Usuario</div>

                <div class="">
                    <form class="" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('re') ? ' has-error' : '' }}">
                            <label for="re" class="">RE</label>
                            <div class="">
                                <input id="re" type="text" class="form-control" name="re" value="{{ old('re') }}" required autofocus>
                                @if ($errors->has('re'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('re') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('posto_graduacao') ? ' has-error' : '' }}">
                            <label for="posto_graduacao" class="">Posto ou graduacao</label>
                            <div class="">
                              <select class="form-control" name="posto_graduacao" id="posto_graduacao">
                                  <option value="SD">Soldado</option>
                                  <option value="CB">Cabo</option>
                                  <option value="3º SGT">3º Sargento</option>
                                  <option value="2º SGT">2º Sargento</option>
                                  <option value="1º SGT">1º Sargento</option>
                                  <option value="SUB TEN">Subtenente</option>
                                  <option value="ASP">Aspirante</option>
                                  <option value="1º TEN">1º Tenente</option>
                                  <option value="2º TEN">2º Tenente</option>
                                  <option value="CAP">Capitão</option>
                                  <option value="MAJ">Major</option>
                                  <option value="TEN CORONEL">Tenente Coronel</option>
                                  <option value="CORONEL">Coronel</option>
                              </select>
                                @if ($errors->has('posto_graduacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('posto_graduacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('assinatura') ? ' has-error' : '' }}">
                            <label for="assinatura" class="">Assinatura</label>
                            <div class="">
                                <input id="assinatura" type="file" class="form-control" name="assinatura" value="{{ old('assinatura') }}" required autofocus>
                                @if ($errors->has('assinatura'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assinatura') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="">Nome de guerra</label>
                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Senha</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar senha</label>
                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
