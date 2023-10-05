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
        $clientes = Clientes::ordeBy('cliente');
        return view('clientes.index')->with(compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = null;
        return view('clientes.index')->with(compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Clientes::create($request->all());

        return redirect()->route('clientes.index')->with('novo','Teste Clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $cliente = Clientes::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes, int $id)
    {
        $cliente = Clientes::find($id);
        return view('clientes.form')->with(compact('cliente'));
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
