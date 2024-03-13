<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
    <a href="{{route('doctores.crear')}}" class="btn btn-primary">Agregar Doctor</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($doctores as $doctor)
                <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->nombres}}</td>
                    <td>{{$doctor->apellidos}}</td>
                    <td>{{$doctor->especialidad}}</td>
                    <td><a type="button" class="btn btn-warning" href="{{route('doctores.editar',$doctor->id)}}">Editar</a><a type="button" href="{{route('doctores.eliminar',$doctor->id)}}" class="btn btn-danger">Eliminar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
