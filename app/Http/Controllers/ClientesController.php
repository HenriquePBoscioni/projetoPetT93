<?php

namespace App\Http\Controllers;

use App\Models\Adocoes;
use App\Models\Clientes;
use App\Models\Contatos;
use App\Models\HistoricoClientes;
use App\Models\Sexos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::orderBy('id_cliente')->paginate();

        $contatos = DB::table('clientes')
            ->join('contatos', 'contatos.id_cliente', '=', 'clientes.id_cliente')
            ->select('clientes.cliente', 'contatos.email')
            ->get();


     //teste
        $clientes = Clientes::all();
        return view('clientes.index')->with(compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = null;
        $contatos = Contatos::class;
        $sexos = Sexos::class;
        $historicoClientes = HistoricoClientes::class;
        return view('clientes.form')->with(compact('cliente', 'contatos', 'sexos','historicoClientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Clientes::create($request->all());

        return redirect()->route('clientes.index')->with('novo','Teste cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $cliente = Clientes::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes, int $id)
    {
        $cliente = Clientes::find($id);
        return view('clientes.form')->with(compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cliente = Clientes::find($id);
        $cliente->update($request->all());
        return redirect()
            ->route('clientes.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Clientes::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');

    }
}
