<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets_Index = Pets::orderBy('id_pet')->paginate(10);
        return view('pets.index')->with(compact('pets_Index'));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pets = null;
        return view('pets.index')->with(compact('pets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pets::create($request->all());

        return redirect()->route('pets.index')->with('novo','Teste adocao');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pets = Pets::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $pets = Pets::find($id);
        return view('pets.form')->with(compact('pets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $pets = Pets::find($id);
        $pets->update($request->all());
        return redirect()
            ->route('pets.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Pets::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
