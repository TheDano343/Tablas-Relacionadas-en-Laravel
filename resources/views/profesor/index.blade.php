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
        <h2 class="text-center">Lista de Profesores</h2>
        <br>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <div class="container">
                        <a href="{{route('profesor.create')}}" class="btn btn-primary">Agregar Profesor</a>
                    </div>
                    <br>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo Electronico </th>
                        <th>Cedula Profesional </th>
                        <th>CURP</th>
                        <th>Materia</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($profesores as $profesor)
                    <tr>
                        <td>{{$profesor->IdProfesor}}</td>
                        <td>{{$profesor->Nombre}}</td>
                        <td>{{$profesor->ApellidoPaterno}}</td>
                        <td>{{$profesor->ApellidoMaterno}}</td>
                        <td>{{$profesor->CorreoElectronico}}</td>
                        <td>{{$profesor->CedulaProfesional}}</td>
                        <td>{{$profesor->CURP}}</td>
                        <td>{{$profesor->Materia->NombreMateria}}</td>
                        <td>
                            <a href="{{route('profesor.edit',['profesor'=>$profesor])}}"
                                class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('profesor.destroy',['profesor'=>$profesor])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Borrar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$profesores->links()}}
        </div>
    </div>
    @endsection
</body>

</html>