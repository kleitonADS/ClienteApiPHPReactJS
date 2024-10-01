<?php

namespace App\Http\Controllers\Api;

use App\Models\Cidade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    // Listar todas as cidades
    public function index()
    {
        $cidades =  Cidade::with('estado')->get(); // Incluindo o estado relacionado



        return response()->json([
            'status' => true,
            "Cidades" =>  $cidades,
        ],200);

    }

    // Criar uma nova cidade
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'estado_id' => 'required|exists:estados,id',
        ]);

        $cidade = Cidade::create($request->all());
        return response()->json($cidade, 201);
    }

    // Mostrar uma cidade específica
    public function show($id)
    {
        return Cidade::with('estado')->findOrFail($id);
    }

    // Atualizar uma cidade existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'estado_id' => 'required|exists:estados,id',
        ]);

        $cidade = Cidade::findOrFail($id);
        $cidade->update($request->all());

        return response()->json($cidade);
    }

    // Excluir uma cidade
    public function destroy($id)
    {
        Cidade::destroy($id);
        return response()->json(null, 204);
    }
}
