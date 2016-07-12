<h3>Lista de peliculas:</h3><br>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <th>Nombre</th>
        <th>Año</th>
        <th>Descripcion</th>
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

        <td>{!! $pelicula->descripcion !!} </td>

        <td>{!! $pelicula->idioma !!}</td>

        <td>{!! $pelicula->Promedio_cal !!}</td>

        <td>{!! $pelicula->precio !!}</td>

        <td>{!! $pelicula->director->nombre !!}</td>

        <td> <a class="btn btn-xs btn-primary" href="{!! URL::to('pelicula/'.$pelicula->id) !!}">Ver</a>
             <a class="btn btn-xs btn-success" href="{!! URL::to('pelicula/'.$pelicula->id.'/edit') !!}">Editar</a>
            {!! Form::open(['action' => ['PeliculasController@destroy', $pelicula->id], 'method' => 'delete']) !!}
            {!! Form::submit('Eliminar Pelicula', ['class'=>'btn btn-xs btn-danger','onclick'=>'return confirm("Seguro que desea eliminar?");']) !!}
            {!! Form::close() !!}
        </td>



        </tbody>
    </tr>

    @endforeach
    </table>
    </div>
