<?php

namespace App\Http\Controllers;

use App\Models\Marcas;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Marcas::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //validación
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'nullable'
        ]);

        $marcas = Marcas::create($request->all());

        return response()->json([
            'mensaje'=>'Marca creada exitosamente',
            'marcas'=> $marcas
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
        $marcas = Marcas::find($id);

        if(!$marcas){

            return response()->json(
                [
                    'mensaje'=>'Marca no encontrada'
                ],404
                );
        }

        return response()->json($marcas,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //validación
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'nullable'
        ]);

        $marcas = Marcas::find($id);
        
        if(!$marcas){

            return response()->json(
                [
                    'mensaje'=>'Marca no encontrada'
                ],404
                );
        }
        $marcas->update($request->all());
        
        return response()->json([
            'mensaje'=>'Marca actualizada exitosamente',
            'marcas'=> $marcas
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $marcas = Marcas::find($id);

        if(!$marcas){

            return response()->json(
                [
                    'mensaje'=>'Marca no encontrada'
                ],404
                );
    }
    $marcas->delete();

    return response()->json([
        'mensaje'=>'Marca eliminada existosamente'
    ],200);
    }
}
