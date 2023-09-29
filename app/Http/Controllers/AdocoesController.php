<?php

namespace App\Http\Controllers;

use App\Models\Adocoes;
use Illuminate\Http\Request;
use App\Models\{
    HistoricoAdocoes,
    Status,
    Clientes,
    Pet
};

class AdocoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adocao = Adocoes::orderBy('id_adocao')->paginate(10);
        return view('adocoes.index')->with(compact('adocoes'));
        //teste
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $adocao_create = null;
        return view('adocoes.index')->with(compact('adocao_create'));
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
    public function show(Adocoes $adocoes)
    {
        $adocao_show = Adocoes::with([
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adocoes $adocoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adocoes $adocoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adocoes $adocoes)
    {
        //
    }
}
