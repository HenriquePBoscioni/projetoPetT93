<?php

namespace App\Http\Controllers;

use App\Models\Historico_adocoes;
use App\Models\Historico_clientes;
use App\Models\HistoricoPets;
use Illuminate\Http\Request;

class HistoricoAdocoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historico_adocoes = Historico_adocoes::ordeBy('id_HistoricoAdocacao')->paginate(2);
        return view('historicoAdocoes.index')->with(compact('historico_adocoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historico_adocao = null;
        return view('historicoAdocoes.index')->with(compact('historico_adocao'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Historico_adocoes::create($request->all());

        return redirect()->route('historicoAdocoes.index')->with('novo','Teste historicoAdocoes');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $historico_adocao = Historico_adocoes::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Historico_adocoes $historico_adocoes, int $id)
    {
        $historico_adocao = Historico_adocoes::find($id);
        return view('historicoAdocoes.form')->with(compact('historico_adocao'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $historico_adocao = Historico_adocoes::find($id);
        $historico_adocao->update($request->all());
        return redirect()
            ->route('historicoAdocoes.index')
            ->with('atualizado','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( int $id)
    {
        Historico_adocoes::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido','Excluido com sucesso!');
    }
}
