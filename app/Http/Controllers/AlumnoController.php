<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Materia;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(10);
        $materium = Materia::paginate(10);
        return view('alumno.index',compact('alumnos','materium'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos = Alumno::all();
        $materium = Materia::all();
        return view('alumno.create',compact('alumnos','materium'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|between:3,45',
            'ApellidoPaterno' => 'required|between:3,25',
            'ApellidoMaterno' => 'required|between:3,25',
            'CorreoElectronico' => 'required|email|unique:alumnos',
            'CURP' => 'required|unique:alumnos|between:3,18',
            'materia_id' => 'required'
        ]);
        
        Alumno::create($request->all());
        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $materium = Materia::all();
        return view('alumno.edit',compact('alumno','materium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $data = $request->validate([
            'Nombre' => 'required|between:3,45',
            'ApellidoPaterno' => 'required|between:3,25',
            'ApellidoMaterno' => 'required|between:3,25',
            'CorreoElectronico' => 'required|email|unique:alumnos',
            'CURP' => 'required|unique:alumnos|between:3,18',
            'materia_id' => 'required'
        ]);
        $alumno->update($data);
        return redirect()->route('alumno.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumno.index');
    }
}
