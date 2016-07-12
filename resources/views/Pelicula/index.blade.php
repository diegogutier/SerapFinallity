@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <!-- Etiqueta que indicará a los navegadores que nuestro sitio contendrá un juego de caracteres de Unicode -->
    <meta charset="utf-8">
    <!-- Forzará a IE a usar el último motor de renderizado. Cuando IE se ejecute en modo de compatibilidad -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Indica que nuestro sitio consumira la totalidad del espacio disponible dentro de la ventana del navegador (válido para smartphone, tablet o desktop)-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/dashboard.css') !!}

            <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Recomendaciones Anales del Simio</title>

</head>
<div class="container" style="background: url(http://fotos.subefotos.com/f34418761529dad80c8bdb4d5921a9aco.png)">
<!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
{!! Html::script('js/jquery-1.12.4.min.js') !!}
        <!-- Plugins JavaScript de Bootstrap-->
{!! Html::script('js/bootstrap.min.js') !!}
        <!--Otros Scripts-->
    <div class="panel panel-default" >
<h3>Lista de peliculas:</h3><br>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <th>Nombre</th>
        <th>Año</th>
        <!--<th>Descripcion</th>-->
        <th>Idioma</th>
        <th>Calificacion</th>
        <th>Precio</th>
        <th>Director</th>

        </thead>

    @foreach($pelicula as $pelicula)
    <tr>
        <tbody>

        <td>{!!$pelicula->nombre !!}</td>

        <td>{!! $pelicula->ano_lanzamiento !!}</td>



        <td>{!! $pelicula->idioma !!}</td>

        <td>{!! $pelicula->Promedio_cal !!}</td>

        <td>{!! $pelicula->precio !!}</td>

        <td>{!! $pelicula->director->nombre !!}</td>

        <td> <a class="btn btn-xs btn-primary" href="{!! URL::to('pelicula/'.$pelicula->id) !!}">Ver</a>
            @if(Auth::user()->rol == 'admin')
             <a class="btn btn-xs btn-success" href="{!! URL::to('pelicula/'.$pelicula->id.'/edit') !!}">Editar</a>
            {!! Form::open(['action' => ['PeliculasController@destroy', $pelicula->id], 'method' => 'delete']) !!}
            {!! Form::submit('Eliminar', ['class'=>'btn btn-xs btn-danger','onclick'=>'return confirm("Seguro que desea eliminar?");']) !!}
            {!! Form::close() !!}
            @endif
        </td>



        </tbody>
    </tr>

    @endforeach
    </table>
    <div class="form-group">
        <div class ="col-sm-offset-2 col-sm-10">
            <a class="btn btn-danger btn-mini" href="{!! URL::to('pelicula/create')!!}">Ingresar Pelicula</a>
        </div>
    </div>

</div>
    </div>
    </div>
</html>
@endsection
