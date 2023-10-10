<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::ordeBy('id_cliente');
        return view('clientes.index')->with(compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = null;
        return view('clientes.index')->with(compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Clientes::create($request->all());

        return redirect()->route('clientes.index')->with('novo','Teste cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $clientes = Clientes::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes, int $id)
    {
        $clientes = Clientes::find($id);
        return view('clientes.form')->with(compact('historicoAdocoes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cliente = Clientes::find($id);
        $cliente->update($request->all());
        return redirect()
            ->route('clientes.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Clientes::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');

    }
}
