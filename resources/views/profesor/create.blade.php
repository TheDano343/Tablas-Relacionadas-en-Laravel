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
                        <h4>Crear Profesor
                            <a href="{{url('profesor')}}" class="btn btn-danger float-end">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('profesor.store')}}" method="post">
                            @csrf
                            @method('POST')

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="Nombre">
                                @error('Nombre')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control" name="ApellidoPaterno">
                                @error('ApellidoPaterno')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" name="ApellidoMaterno">
                                @error('ApellidoMaterno')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Correo Electronico</label>
                                <input type="email" class="form-control" name="CorreoElectronico">
                                @error('CorreoElectronico')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Cedula Profesional</label>
                                <input type="text" class="form-control" name="CedulaProfesional">
                                @error('CedulaProfesional')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Curp</label>
                                <input type="text" class="form-control" name="CURP">
                                @error('CURP')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="materia_id">Materia</label>
                                <select class="form-control" name="materia_id">
                                    <option value="">Asigna una Materia</option>
                                    @foreach($materium as $materium)
                                    <option value="{{ $materium->IdMateria }}">{{ $materium->NombreMateria }}</option>
                                    @endforeach
                                </select>
                                @error('materia_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Crear</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>