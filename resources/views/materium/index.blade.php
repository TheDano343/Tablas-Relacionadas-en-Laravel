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
        <h2 class="text-center">Lista De Materias</h2>
        <br>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <div class="container">
                        <a href="{{route('materium.create')}}" class="btn btn-primary">Agregar Materia</a>
                    </div>
                    <br>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materium as $materiums)
                    <tr>
                        <td>{{$materiums->IdMateria}}</td>
                        <td>{{$materiums->NombreMateria}}</td>
                        <td>
                            <a class="btn btn-primary"
                                href="{{route('materium.edit',['materium' => $materiums])}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('materium.destroy',['materium' => $materiums])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Borrar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$materium->links()}}
        </div>
    </div>
    @endsection
</body>

</html>