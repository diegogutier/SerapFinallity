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
    <title>Recomendaciones</title>

</head>
<body>
<!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
{!! Html::script('js/jquery-1.12.4.min.js') !!}
        <!-- Plugins JavaScript de Bootstrap-->
{!! Html::script('js/bootstrap.min.js') !!}
        <!--Otros Scripts-->

<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title">Pelicula :  </h5>
    </div>
    <div class="panel-body">
        <h4>Nombre:</h4><h5>{!! $pelicula->nombre!!}</h5>
        <h4>Año</h4><h5> {!!$pelicula->ano_lanzamiento !!}</h5>
        <h4>Descripción</h4><h5> {!!$pelicula->descripcion !!}</h5>
        <h4>Idioma</h4><h5> {!!$pelicula->idioma !!}</h5>
        <h4>Calificación</h4><h5>{!!$pelicula->Promedio_cal !!}</h5>
        <h4>Precio</h4><h5>{!!$pelicula->precio !!}</h5>
        <h4>director</h4><h5>{!!$pelicula->director->nombre !!}</h5>

</div>
    {!! Form::open(['action'=>['PeliculasController@destroy',$pelicula->id],'method'=>'delete']) !!}
    {!! Form::submit('Eliminar Pelicula',['class'=>'btn btn-danger btn-mini','onclick'=>'return confirm("Seguro que desea eliminar?");']) !!}
    {!! Form::close() !!}
    <a class="btn btn-primary btn-mini" href="{!! URL::to('pelicula/create')!!}">Crear Pelicula</a>
    <a class="btn btn-primary btn-mini" href="{!! URL::to('pelicula')!!}">Listado</a>
    </div>

</body>
</html>