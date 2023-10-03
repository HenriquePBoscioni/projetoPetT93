<?php

namespace App\Http\Controllers;

use App\Models\HistoricoPets;
use Illuminate\Http\Request;

class HistoricoPetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historicoPets_Index = HistoricoPets::orderBy('id_historicoPet');
        return view('historicoPet.index')->with(compact('HistoricoPets'));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historicoPets = null;
        return view('historicoPet.index')->with(compact('historicoPets_create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HistoricoPets::create($request->all());

        return redirect()->route('historicoPets.index')->with('novo', 'Teste HistoricoPets');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $historicoPets = HistoricoPets::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $historicoPets = HistoricoPets::find($id);
        return view('adocoes.form')->with(compact('adocoes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $historicoPets = HistoricoPets::find($id);
        $historicoPets->update($request->all());
        return redirect()
            ->route('adocoes.index')
            ->with('atualizado', 'Atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        HistoricoPets::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
