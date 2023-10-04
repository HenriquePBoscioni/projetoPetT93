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
        $historicoPets = HistoricoPets::orderBy('id_historicoPet');
        return view('historicoPet.index')->with(compact('historicoPets'));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historicoPet = null;
        return view('historicoPet.index')->with(compact('historicoPet'));
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
        $historicoPet = HistoricoPets::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $historicoPet = HistoricoPets::find($id);
        return view('historicoPet.form')->with(compact('historicoPet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $historicoPet = HistoricoPets::find($id);
        $historicoPet->update($request->all());
        return redirect()
            ->route('historicoPets.index')
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
