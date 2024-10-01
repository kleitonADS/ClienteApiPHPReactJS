<?php

namespace App\Http\Controllers\Api;
use App\Models\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    // Método para listar todos os clientes com paginação

    public function index(Request $request){


    $clientes = Cliente::with(['estado', 'cidade'])
    ->when($request->cpf, function ($query) use ($request) {
        return $query->where('cpf', $request->cpf);
    })
    ->when($request->nome, function ($query) use ($request) {
        return $query->where('nome', 'like', '%' . $request->nome . '%');
    })
    ->when($request->data_nascimento, function ($query) use ($request) {
        return $query->where('data_nascimento', $request->data_nascimento);
    })
    ->when($request->sexo, function ($query) use ($request) {
        return $query->where('sexo', $request->sexo);
    })
    ->when($request->estado_id, function ($query) use ($request) {
        return $query->where('estado_id', $request->estado_id);
    })
    ->when($request->cidade_id, function ($query) use ($request) {
        return $query->where('cidade_id', $request->cidade_id);
    })  ->orderBy('created_at', 'desc') ->paginate(5);
    return response()->json([
                                    'status' => true,
                                    "Clientes" =>  $clientes,
                                ],200);

}

    // Método para armazenar um novo cliente
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cpf' => 'required|unique:clientes',
            'nome' => 'required',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|in:Masculino,Feminino',
            'endereco' => 'required',
            'estado_id' => 'required|exists:estados,id',
            'cidade_id' => 'required|exists:cidades,id',
        ]);

        $cliente = Cliente::create($validated);
        return response()->json($cliente, 201);
    }

    // Método para mostrar um cliente específico
    public function show($id)
    {
        $cliente = Cliente::with(['estado', 'cidade'])->findOrFail($id);
        return response()->json($cliente);
    }

    // Método para atualizar um cliente existente
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validated = $request->validate([
            'cpf' => 'required|unique:clientes,cpf,' . $cliente->id,
            'nome' => 'required',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|in:Masculino,Feminino',
            'endereco' => 'required',
            'estado_id' => 'required|exists:estados,id',
            'cidade_id' => 'required|exists:cidades,id',
        ]);

        $cliente->update($validated);

        return response()->json([
            'status' => true,
            "cliente" =>  $request,
            "message" => "Cliente Editado com sucesso!",
        ],200);
        return response()->json($cliente);
    }

    // Método para excluir um cliente
    public function destroy( Cliente $cliente)
    {
        try {


            $cliente->delete();

            return response()->json([
                'status' => true,
                 "message" => "Cliente excluido com sucesso!",
            ],200);

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                "message" => "Error em excluir!",
            ],400);
        }

    }
}
