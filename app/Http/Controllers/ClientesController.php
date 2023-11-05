<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; // Certifique-se de usar o namespace correto para o seu modelo.

class ClientesController extends Controller
{
    // Mostra a lista de todos os clientes
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->paginate(5);
        return view('clientes/index', compact('clientes'));
    }

    // Mostra o formulário para criar um novo cliente
    public function create()
    {
        return view('clientes.create');
    }

    // Armazena um cliente recém-criado no banco de dados
    public function store(Request $request)
    {
        // TODO para enviar mensagem de erro ao flash message
        $validatedData = $request->validate([
            'nome' => 'required|max:150',
            'telefone' => 'required|max:25',
            'email' => 'required|email|max:255',
            'endereco' => 'required',
        ]);

        // print_r($validatedData);
        // exit;

        $cliente = Cliente::create($validatedData);
        return redirect('/clientes')->with('success', 'Cliente criado com sucesso.');
    }

    // Mostra os dados de um cliente específico
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    // Mostra o formulário para editar um cliente existente
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    // Atualiza um cliente no banco de dados
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:150',
            'phone' => 'required|max:25',
            'email' => 'required|email|max:255',
            'address' => 'required',
        ]);

        Cliente::whereId($id)->update($validatedData);
        return redirect('/clientes')->with('success', 'Cliente atualizado com sucesso.');
    }

    // Remove um cliente do banco de dados
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect('/clientes')->with('success', 'Cliente excluído com sucesso.');
    }
}
