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
        $clientes = Clientes::ordeBy('id_clientes');
        return view('clientes.Index')->with(compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = null;
        return view('clientes.form')->with(compact('cliente'));
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
        $clientes = Clientes::with([
            'clientes',
            'clientes.tipo',
            'cliente.usuario',
        ])->find($id);
        return view('clientes.show')
        ->with(compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes, int $id)
    {
        $clientes = Clientes::find($id);
        return view('clientes.form')->with(compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $clientes = Clientes::find($id);
        $clientes->update($request->all());
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
