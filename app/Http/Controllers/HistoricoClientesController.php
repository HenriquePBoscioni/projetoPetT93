<?php

namespace App\Http\Controllers;

use App\Models\Historico_clientes;
use Illuminate\Http\Request;

class HistoricoClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $historico_clientes = Historico_clientes::ordeBy( 'id_historico')->paginate();
        return view('historicoCliente.index')->with(compact('historico_clientes'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historico_cliente = null;
        return view('historicoCliente.index')->with(compact('historico_cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Historico_clientes::create($request->all());

        return redirect()->route('historicoClientes.index')->with('novo','Teste historicoClientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $historico_cliente = Historico_clientes::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $historico_cliente = Historico_clientes::find($id);
        return view('historicoAdocoes.form')->with(compact('historico_cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $historico_cliente = Historico_clientes::find($id);
        $historico_cliente->update($request->all());
        return redirect()
            ->route('historicoAdocoes.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Historico_clientes::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
