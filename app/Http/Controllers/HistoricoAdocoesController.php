<?php

namespace App\Http\Controllers;

use App\Models\Historico_adocoes;
use App\Models\Historico_clientes;
use Illuminate\Http\Request;

class HistoricoAdocoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $historico_adocoesIndex = Historico_adocoes::ordeBy('id_HistoricoAdocacao')->paginate(2);
        return view('historicoAdocoes.index')->with(compact('HistoricoAdocao'));
=======
        $historico_adocoesIndex = HistoricoAdocoes::orderBy('id_Historico_adocacao')->paginate(2);

        $historico_adocoesIndex = HistoricoAdocoesController::orderBy('id_historico_adocacao')->paginate(10);
        return view('historicoAdocoes.index')->with(compact('HistoricoAdocoes'));
>>>>>>> f94338ae5ae2c180fc00242ac130341854fce58b
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historico_adocoes = null;
        return view('historicoAdocoes.index')->with(compact('historicoAdocoes'));
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
        $historico_adocoes = Historico_adocoes::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Historico_adocoes $historico_adocoes, int $id)
    {
        $historico_adocoes = Historico_adocoes::find($id);
        return view('historicoAdocoes.form')->with(compact('historicoAdocoes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Historico_adocoes $historico_adocoes, int $id)
    {
        $historico_adocoes = Historico_adocoes::find($id);
        $historico_adocoes->update($request->all());
        return redirect()
            ->route('historicoAdocoes.index')
            ->with('atualizado','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Historico_adocoes $historico_adocoes, int $id)
    {
        Historico_adocoes::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido','Excluido com sucesso!');
    }
}
