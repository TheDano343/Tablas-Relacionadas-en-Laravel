<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materium = Materia::paginate(10);
        return view('materium.index',compact('materium'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materium = Materia::all();
        return view('materium.create',compact('materium'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NombreMateria'=>'required|unique:materias|between:3,60'
        ]);
        Materia::create($request->all());
        return redirect()->route('materium.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materium)
    {
        return view('materium.edit',compact('materium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materium)
    {
        $data = $request->validate([
            'NombreMateria'=>'required|unique:materias|between:3,60'
        ]);
       $materium->update($data);
       return redirect()->route('materium.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materium)
    {
        $materium->delete();
        return redirect()->route('materium.index');
    }
}
