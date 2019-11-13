<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Actores</h1>
  <ul>

    @forelse($actores as $actor)

    <li>{{$actor->getNombreCompleto()}}</li>
  @empty {{'no hay actores'}}
  @endforelse
  </ul>


  </body>
</html>
