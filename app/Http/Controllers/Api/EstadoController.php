<?php

namespace App\Http\Controllers\Api;

use App\Models\Estado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    // Listar todos os estados
    public function index()
    {
        $estados =  Estado::all();

        return response()->json([
            'status' => true,
            "Estados" =>  $estados,
        ],200);
    }

    // Criar um novo estado
    public function store(Request $request)
    {
        $request->validate([
            'uf' => 'required|string|max:2',
            'nome' => 'required|string|max:255',
        ]);

        $estado = Estado::create($request->all());
        return response()->json($estado, 201);
    }

    // Mostrar um estado específico
    public function show($id)
    {
        return Estado::findOrFail($id);
    }

    // Atualizar um estado existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'uf' => 'required|string|max:2',
            'nome' => 'required|string|max:255',
        ]);

        $estado = Estado::findOrFail($id);
        $estado->update($request->all());

        return response()->json($estado);
    }

    // Excluir um estado
    public function destroy($id)
    {
        Estado::destroy($id);
        return response()->json(null, 204);
    }
}
