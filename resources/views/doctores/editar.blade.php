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
    <form action="{{ route('doctores.storeEdit',$doctor->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid">
            <label class="form-control">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="{{$doctor->nombres}}" require>
            <label class="form-control">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$doctor->apellidos}}" require>
            <label class="form-control">Especialidad</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad" value="{{$doctor->especialidad}}" require>
            <button type="submit" class="btn btn-success mt-2">Guardar Cambios</button>
            <button class="btn btn-danger mt-2" href="{{route('doctores.index')}}">Cancelar</button>
    </div>
    </form>
</body>

</html>
