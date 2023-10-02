<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contatosIndex = Contatos::orderby('id_contato')->paginate(10);
        return view('contatos.index')->with(compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contatos = null;
        return view('contatos.index')->with(compact('contato_create'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contatos::create($request->all());

        return redirect()->route('contatos.index')->with('novo','Teste de contato');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contatos $contatos)
    {
        $contatos = Contatos::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contatos $contatos)
    {
        $contatos = Contatos::find($id);
        return view('contatos.form')->with(compact('contatos'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contatos $contatos)
    {
        $contatos = Adocoes::find($id);
        $contatos->update($request->all());
        return redirect()
            ->route('contatos.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contatos $contatos)
    {
        Contatos::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
