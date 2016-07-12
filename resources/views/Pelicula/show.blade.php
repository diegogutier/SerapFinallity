<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title">Pelicula  </h5>
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

</div>