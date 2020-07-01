@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="">
            <div class="">
              <div class="text-center">
                <img src="rodoviaria.png" alt="">
              </div>
                <div class="center-block text-center">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('re') ? ' has-error' : '' }}">
                            <label for="re" class="col-md-4 control-label">Login</label>
                            <div class="">
                                <input id="re" type="text" class="form-control" name="re" value="{{ old('re') }}" required autofocus>
                                @if ($errors->has('re'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('re') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

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
                            <div class="col-md-6 offset-md-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Logar
                                </button>
                                <br>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueci a senha
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
