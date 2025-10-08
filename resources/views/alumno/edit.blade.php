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
                        <h4>Editar Alumno
                            <a href="{{url('alumno')}}" class="btn btn-danger float-end">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('alumno.update',['alumno'=>$alumno])}}" method="post">
                            @csrf
                            @method('PUT')


                            <div class="mb-3">
                                <label>Nombre Alumno</label>
                                <input class="form-control" type="text" value="{{ $alumno->Nombre }}" name="Nombre">
                                @error('Nombre')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Apellido Paterno</label>
                                <input class="form-control" type="text" value="{{ $alumno->ApellidoPaterno }}"
                                    name="ApellidoPaterno">
                                @error('ApellidoPaterno')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Apellido Materno</label>
                                <input class="form-control" type="text" value="{{$alumno->ApellidoMaterno}}"
                                    name="ApellidoMaterno">
                                @error('ApellidoMaterno')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Correo Electronico</label>
                                <input class="form-control" type="email" value="{{$alumno->CorreoElectronico}}"
                                    name="CorreoElectronico">
                                @error('CorreoElectronico')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>CURP</label>
                                <input class="form-control" type="text" value="{{$alumno->CURP}}" name="CURP">
                                @error('CURP')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="Materia_id">Materia</label>
                                <select class="form-control" name="materia_id">
                                    <option value="">Asigna una Materia</option>
                                    @foreach($materium as $materium)
                                    @if($materium->IdMateria == $alumno->materia_id)
                                    <option selected value="{{ $materium->IdMateria }}">{{ $materium->NombreMateria }}
                                    </option>
                                    @else
                                    <option value="{{ $materium->IdMateria }}">{{ $materium->NombreMateria }}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('materia_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <button class="btn btn-primary">Actualizar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>