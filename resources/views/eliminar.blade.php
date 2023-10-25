<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    

    
        
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Eliminacion de registro</h5>
                
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">C&oacute;digo Pel&iacute;cula</th>
                            <th scope="col">T&iacute;tulo</th>
                            <th scope="col">Anio Debut</th>
                            <th scope="col">Duraci&oacute;n</th>                        
                        </tr>
                        </thead>
                        <tbody>                        
                            <tr>
                                <th scope="row">{{$pelicula->codigoPelicula}}</th>
                                <td>{{$pelicula->titulo}}</td>
                                <td>{{$pelicula->anyoDebut}}</td>
                                <td>{{$pelicula->duracion}}</td>                            
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" data-bs-dismiss="modal" href="{{ route('pelicula.inicio') }}">Cancelar</a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
            </div>
        

    

</body>
</html>