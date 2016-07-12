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
<div class="container" style="background: url(http://fotos.subefotos.com/f34418761529dad80c8bdb4d5921a9aco.png)">
<!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
{!! Html::script('js/jquery-1.12.4.min.js') !!}
        <!-- Plugins JavaScript de Bootstrap-->
{!! Html::script('js/bootstrap.min.js') !!}
        <!--Otros Scripts-->
    <div class="panel panel-default" >
@if ($errors->has())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<h2 class="col-lg-offset-1">Crear Pelicula</h2><br>
{!! Form::open(['route'=>['pelicula.store'],'class'=>'form-horizontal']) !!}


<div class="form-group">
    {!! Form::label('nombre', 'Nombre',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('nombre', null,['class'=>'form-control']) !!}</div>
</div>

<div class="form-group">
    {!! Form::label('ano_lanzamiento', 'Año lanzamiento',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::date('ano_lanzamiento', null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('descripcion', null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('idioma', 'Idioma',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('idioma', null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('precio', 'Precio',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('precio', null,['class'=>'form-control']) !!}
    </div>
</div>




<div class="form-group">
    {!! Form::label('promedio_cal', 'Calificacion',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('promedio_cal', null,['class'=>'form-control']) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('director_id', 'Nombre Director',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        <a>{!! Form::select('director_id', App\Director::lists('nombre','id'),null,array('class'=>'form-control'))!!}</a>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Guardar',['class'=>'btn btn-default','type'=>'submit']) !!}
    </div>
</div>




<div class="form-group">
    <div class ="col-sm-offset-2 col-sm-10">
        <a class="btn btn-danger btn-mini" href="{!! URL::to('pelicula')!!}">Cancelar</a>
    </div>
</div>
{!! Form::close() !!}
</div>
    </div>
</html>