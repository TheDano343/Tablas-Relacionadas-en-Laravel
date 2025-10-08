<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Materia;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::paginate(10);
        $materium = Materia::paginate(10);
        return view('profesor.index',compact('profesores','materium'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesores = Profesor::all();
        $materium = Materia::all();
        return view('profesor.create', compact('profesores','materium'));
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
            'CorreoElectronico' => 'required|email|unique:profesors',
            'CedulaProfesional' => 'required|unique:profesors|between:3,10',
            'CURP' => 'required|unique:profesors|between:3,18',
            'materia_id' => 'required'
        ]);
        Profesor::create($request->all());
        return redirect()->route('profesor.index');
    }

    
    
    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        $materium = Materia::all();
        return view('profesor.edit',compact('profesor','materium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        $data = $request->validate([
            'Nombre' => 'required|between:3,45',
            'ApellidoPaterno' => 'required|between:3,25',
            'ApellidoMaterno' => 'required|between:3,25',
            'CorreoElectronico' => 'required|email|unique:profesors',
            'CedulaProfesional' => 'required|unique:profesors|between:3,10',
            'CURP' => 'required|unique:profesors|between:3,18',
            'materia_id' => 'required'
        ]);
        $profesor->update($data);
        return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesor.index');
    }
}
