<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Productos::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validación
        $request->validate([
            'nombre'=>'required',
            'precio'=>'required',
            'marcas_id'=>'required'
        ]);

        $productos = Productos::create($request->all());

        return response()->json([
            'mensaje'=>'Producto creado exitosamente',
            'productos'=> $productos
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $productos = Productos::find($id);

        if(!$productos){

            return response()->json(
                [
                    'mensaje'=>'Producto no encontrado'
                ],404
                );
        }

        return response()->json($productos,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validación
        $request->validate([
            'nombre'=>'required',
            'precio'=>'required',
            'marcas_id'=>'required'
        ]);

        $productos = Productos::find($id);
        
        if(!$productos){

            return response()->json(
                [
                    'mensaje'=>'Producto no encontrada'
                ],404
                );
        }
        $productos->update($request->all());
        
        return response()->json([
            'mensaje'=>'Producto actualizado exitosamente',
            'productos'=> $productos
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productos = Productos::find($id);

        if(!$productos){

            return response()->json(
                [
                    'mensaje'=>'Producto no encontrado'
                ],404
                );
    }
    $productos->delete();

    return response()->json([
        'mensaje'=>'Producto eliminado existosamente'
    ],200);
    }
}
