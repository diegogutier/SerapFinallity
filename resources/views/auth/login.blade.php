@extends('layouts.app')1

@section('content')

<div class="container" style="background: url(http://fotos.subefotos.com/f34418761529dad80c8bdb4d5921a9aco.png)">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="logo"  align="center"  >
                <div ><img src="logo.png"  style="padding-left: 20px"   alt="" /></div>

                <div class="panel-body" style="padding-right: 100px">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4" align="right">

                                <div class="checkbox">
                                    <a class="btn btn-link"  href="{{ url('/password/reset') }}">Recuperar Contraseña</a>
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" align="center">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="background-color: gold" >
                                    <i class="fa fa-btn fa-sign-in"></i> Ingresar
                                </button>


                                <p  type="text">¿ERES NUEVO EN SERAP?</p>
                                <a class="btn btn-link" href="{{ url('/register') }}">Registrate aqui</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
