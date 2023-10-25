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

    <h1>Creación Pel&iacute;culas</h1>
    
    <form method="POST" action="{{ route('pelicula.store') }}">

        @csrf
        @method('POST')

        <div class="row">

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Codigo de pelicula</label>
                <input type="text" class="form-control" name="codigoPelicula" placeholder="Example input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Another input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Anio debut</label>
                <input type="text" class="form-control" name="anioDebut" id="anioDebut" placeholder="Another input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Duracion</label>
                <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Another input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Codigo genero</label>
                <input type="text" class="form-control" name="genero" id="genero" placeholder="Another input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Productor</label>
                <input type="text" class="form-control" name="productor" id="productor" placeholder="Another input placeholder">
              </div>

              <button type="submit" class="btn btn-success">Guardar</button>
              <a class="btn btn-secondary" data-bs-dismiss="modal" href="{{ route('pelicula.inicio') }}">Cancelar</a>

        </div>

    </form>

  </div>

</body>
</html>