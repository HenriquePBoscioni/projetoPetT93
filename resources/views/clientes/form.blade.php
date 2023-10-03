@extends('layouts.base')
@section('content')
    <h1>
        @if ($cliente)
            Editando a adocão
            {{ $cliente->ad }}
        @else
            Cadastrar uma nova cliente
        @endif
    </h1>
    <form action="{{ $cliente ? route('adocoes.update', ['id' => $cliente->id_cliente]) : route('adocoes.store') }}"
        method="post" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="cliente" class="form_label">cliente*</label>
            <input class="form-control" type="text" id="cliente" name="cliente" value="{{ $cliente ? $cliente->cliente : old('cliente')}}">
        </div>

        <div class="col-md-2">
            <input class="btn btn-primary mt-4" type="submit"
            value="{{ $cliente ? 'Atualizar' : 'Cadastrar' }}">
        </div>
    </form>
    @endsection
    @section('scripts')
        @parent
    @endsection
