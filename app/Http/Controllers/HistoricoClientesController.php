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
        $historico_clientesIndex = Historico_clientes::ordeBy( 'id_historico')->paginate();
        return view('historicoCliente.index')->with(compact('HistoricoClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historico_clientes = null;
        return view('historicoAdocoes.index')->with(compact('HistoricoClientes_create'));
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
    public function show(Historico_clientes $historico_clientes)
    {
        $historico_clientes = Historico_clientes::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Historico_clientes $historico_clientes)
    {
        $historico_clientes = Historico_clintes::find($id);
        return view('historicoAdocoes.form')->with(compact('HistoricoClientes'))
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Historico_clientes $historico_clientes)
    {
        $historico_clientes = Historico_clientes::find($id);
        $historico_clientes->update($request->all());
        return redirect()
            ->route('historicoAdocoes.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Historico_clientes $historico_clientes)
    {
        Historico_clientes::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
