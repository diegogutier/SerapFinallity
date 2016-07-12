@extends('layouts.app')

@section('content')
<div class="container" style="background: url(http://fotos.subefotos.com/f34418761529dad80c8bdb4d5921a9aco.png)">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div align="center"  >
                    <div ><img src="logo.png"  style="padding-left: 50px"   alt="" /></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div id='visto'>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                            <label for="edad" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input id="edad" type="integer" class="form-control" name="edad" value="{{ old('edad') }}">

                                @if ($errors->has('edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo</label>

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
                            <label for="password" class="col-md-4 control-label">Constraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Constraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button"  class="btn btn-primary" onclick="mostrar()" style="background-color: #d62728">
                                    <i class="fa fa-btn fa-user"></i> Siguiente
                                </button>
                                <button type="button"  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user" onclick=""></i> Cancelar
                                </button>
                            </div>
                        </div>
                            </div>
                        <!--REGISTRO 2-->
                        <div id='oculto' style='display:none;'>Seleccionar 3 Generos Preferidos
                            <div class="form-group{{ $errors->has('genero1') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Genero 1</label>

                                <div class="col-md-6">
                                    <select name="genero1">
                                        @foreach(App\Genero::all() as $genero)
                                            <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                            @endforeach
                                    </select>
                                    @if ($errors->has('genero1'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('genero1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('genero2') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Genero 2</label>

                                <div class="col-md-6">
                                    <select name="genero2">
                                        @foreach(App\Genero::all() as $genero)
                                            <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('genero2'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('genero2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('genero3') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Genero 3</label>

                                <div class="col-md-6">
                                    <select name="genero3">
                                        @foreach(App\Genero::all() as $genero)
                                            <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('genero3'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('genero3') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div>Seleccionar 3 Generos NO Preferidos
                                <div class="form-group{{ $errors->has('no_genero1') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Genero 1</label>

                                    <div class="col-md-6">
                                        <select name="no_genero1">
                                            @foreach(App\Genero::all() as $genero)
                                                <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('no_genero1'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('no_genero1') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('no_genero2') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Genero 2</label>

                                    <div class="col-md-6">
                                        <select name="no_genero2">
                                            @foreach(App\Genero::all() as $genero)
                                                <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('no_genero2'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('no_genero2') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('no_genero3') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Genero 3</label>

                                    <div class="col-md-6">
                                        <select name="no_genero3">
                                            @foreach(App\Genero::all() as $genero)
                                                <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('no_genero3'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('no_genero3') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="button"  class="btn btn-primary" onclick="mostrardos()" style="background-color: #d62728">
                                                <i class="fa fa-btn fa-user"></i> Siguiente
                                            </button>
                                            <button type="button"  class="btn btn-primary">
                                                <i class="fa fa-btn fa-user" onclick=""></i> Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                          <!--FIN DIV PASO 2-->
                        </div>
                        <!--DIV PASO 3-->
                        <div id='ocultodos' style='display:none;'>Seleccionar 2 Idiomas
                                <div class="form-group{{ $errors->has('idioma1') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Idioma 1</label>

                                    <div class="col-md-6">
                                        <select name="idioma1">
                                            @foreach(App\Pelicula::all() as $pelicula)
                                                <option value="{{$pelicula->id}}">{{$pelicula->idioma}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('idioma1'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('idioma1') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('idioma2') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Idioma 2</label>

                                    <div class="col-md-6">
                                        <select name="idioma2">
                                            @foreach(App\Pelicula::all() as $pelicula)
                                                <option value="{{$pelicula->id}}">{{$pelicula->idioma}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('idioma2'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('idioma2') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit"  class="btn btn-primary" style="background-color: #d62728">
                                            <i class="fa fa-btn fa-user"></i> Siguiente
                                        </button>
                                        <button type="submit"  class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i> Cancelar</button>
                                    </div>
                                </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
