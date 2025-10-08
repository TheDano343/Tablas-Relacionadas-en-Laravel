<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Crear Materia
                            <a href="{{url('materium')}}" class="btn btn-danger float-end">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('materium.store')}}" method="post">
                            @csrf
                            @method('POST')

                            <div class="mb-3">
                                <label>Nombre de la Materia</label>
                                <input type="text" class="form-control" name="NombreMateria">
                                @error('NombreMateria')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <button class="btn btn-primary">Crear</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>