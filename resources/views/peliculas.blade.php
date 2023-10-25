<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
  <div class="container">
    <h1>ABC de Peliculas</h1>
    </p>

    <div>
        <a class="btn btn-primary" href="{{ route('pelicula.crear') }}">Crear Nueva Pelicula</a>
    </div>

    </p>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">C&oacute;digo Pel&iacute;cula</th>
            <th scope="col">T&iacute;tulo</th>
            <th scope="col">Anio Debut</th>
            <th scope="col">Duraci&oacute;n</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $item)
            <tr>
                <th scope="row">{{$item->codigoPelicula}}</th>
                <td>{{$item->titulo}}</td>
                <td>{{$item->anyoDebut}}</td>
                <td>{{$item->duracion}}</td>
                <td>
                  <a class="btn btn-success" href="{{ route('pelicula.edit', $item->codigoPelicula) }}">Editar</a>
                </td>
                <td>
                  <a class="btn btn-danger" href="{{ route('pelicula.delete', $item->codigoPelicula) }}">Eliminar</a>
                </td>
            </tr>
            @endforeach          
          
        </tbody>
      </table>        
  </div>

</body>
</html>