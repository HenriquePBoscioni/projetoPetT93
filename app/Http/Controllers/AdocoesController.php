<?php

namespace App\Http\Controllers;

use App\Models\Adocoes;
use Illuminate\Http\Request;
use App\Models\{
    HistoricoAdocoes,
    Status,
    Clientes,
    Pet,
    Portes

};


class AdocoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adocoes = Adocoes::orderBy('id_adocao')->paginate(1);
        return view('adocoes.index')->with(compact('adocoes'));//
        //teste
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $adocao = null;
        return view('adocoes.form')->with(compact('adocao'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Adocoes::create($request->all());

        return redirect()->route('adocoes.index')->with('novo','Teste adocao');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $adocao = Adocoes::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $adocao = Adocoes::find($id);
        return view('adocoes.form')->with(compact('adocao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $adocao = Adocoes::find($id);
        $adocao->update($request->all());
        return redirect()
            ->route('adocoes.index')
            ->with('atualizado', 'Atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Adocoes::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');

    }
}
