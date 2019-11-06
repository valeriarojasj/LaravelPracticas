<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Peliculas</title>
  </head>
  <body>
    <h1>Listado de Peliculas</h1>
<ul>
{{--@foreach($peliculas as $pelicula)
  --}}


@forelse($peliculas as $pelicula)
<a href="#">
  <li>{{$pelicula['titulo']}}</li></a>

{{--@endforeach--}}
@empty{{'No hay peliculas'}}
@endforelse

</ul>

  </body>
</html>
