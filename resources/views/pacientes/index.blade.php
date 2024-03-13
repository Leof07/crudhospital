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
    <a href="{{route('pacientes.crear')}}" class="btn btn-primary">Agregar Paciente</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">edad</th>
                    <th scope="col">Doctor a Cargo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{{$paciente->id}}</td>
                    <td>{{$paciente->nombres}}</td>
                    <td>{{$paciente->apellidos}}</td>
                    <td>{{$paciente->direccion}}</td>
                    <td>{{$paciente->edad}}</td>
                    <td>{{$paciente->doctores->nombres}}</td>
                    <td><a type="button" class="btn btn-warning" href="{{route('pacientes.editar', $paciente->id)}}">Editar</a>
                    <a type="button" href="{{route('pacientes.eliminar',$paciente->id)}}" class="btn btn-danger">Eliminar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
