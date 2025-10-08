@extends('layouts.app')

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
    @section('content')
    <div class="container">
        <h2 class="text-center">Lista de Alumnos</h2>
        <br>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <div class="container">
                        <a href="{{route('alumno.create')}}" class="btn btn-primary">Agregar Alumno</a>
                    </div>
                    <br>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo Electronico</th>
                        <th>CURP</th>
                        <th>Materia</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->IdAlumno}}</td>
                        <td>{{$alumno->Nombre}}</td>
                        <td>{{$alumno->ApellidoPaterno}}</td>
                        <td>{{$alumno->ApellidoMaterno}}</td>
                        <td>{{$alumno->CorreoElectronico}}</td>
                        <td>{{$alumno->CURP}}</td>
                        <td>{{$alumno->Materia->NombreMateria}}</td>
                        <td>
                            <a href="{{route('alumno.edit',['alumno'=> $alumno])}}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('alumno.destroy',['alumno' => $alumno])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Borrar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$alumnos->links()}}
        </div>
    </div>
    @endsection
</body>

</html>