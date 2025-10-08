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
                        <h4>Editar Profesor
                            <a href="{{url('profesor')}}" class="btn btn-danger float-end">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('profesor.update',['profesor'=>$profesor])}}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" name="Nombre" class="form-control" value="{{$profesor->Nombre}}">
                                @error('Nombre')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Apellido Paterno</label>
                                <input type="text" name="ApellidoPaterno" class="form-control"
                                    value="{{$profesor->ApellidoPaterno}}">
                                @error('ApellidoPaterno')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Apellido Materno</label>
                                <input type="text" name="ApellidoMaterno" class="form-control"
                                    value="{{$profesor->ApellidoMaterno}}">
                                @error('ApellidoMaterno')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror    
                            </div>

                            <div class="mb-3">
                                <label>Correo Electronico</label>
                                <input type="email" name="CorreoElectronico" class="form-control"
                                    value="{{$profesor->CorreoElectronico}}">
                                @error('CorreoElectronico')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror   
                            </div>

                            <div class="mb-3">
                                <label>Cedula Profesional</label>
                                <input type="text" name="CedulaProfesional" class="form-control"
                                    value="{{$profesor->CedulaProfesional}}">
                                @error('CedulaProfesional')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror   
                            </div>

                            <div class="mb-3">
                                <label>CURP</label>
                                <input type="text" name="CURP" class="form-control" value="{{$profesor->CURP}}">
                                @error('CURP')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Carrera</label>
                                <select class="form-control" name="materia_id">
                                    <option value="">Asigna una materia</option>
                                    @foreach($materium as $materium)
                                    @if($materium->IdMateria == $profesor->materia_id)
                                    <option selected value="{{$materium->IdMateria}}">{{$materium->NombreMateria}}
                                    </option>
                                    @else
                                    <option value="{{$materium->IdMateria}}">{{$materium->NombreMateria}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('materia_id')
                                <span>{{$message}}</span>
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