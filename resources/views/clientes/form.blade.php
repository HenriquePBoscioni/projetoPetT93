@extends('layouts.base')
@section('content')
    <h1 class="mx-3 my-4">
        <i class="bi bi-wallet2"></i>
        @if ($cliente)
            Editar cliente:
            Nº {{ $cliente->id_cliente }}
        @else
            Novo Cliente
        @endif
    </h1>
    <form action="{{ $clientes ? route('clientes.update', ['id' => $cliente->id_cliente]) : route('clientes.store') }}"
        method="post" enctype="multipart/form-data" class="row g-3">
        <div class="col-md-6">
            <label for="id_cliente" class="form-label">Clientes*</label>
            <input type="text" id="id_cliente" class="form-control"
                value="{{ $cliente ? $cliente->cliente : old('cliente') }}" required>
        </div>
        <div class="col-md-6">
            <label for="id_contato" class="form-label">email*</label>
            <input type="text" id="id_contato" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="id_contato" class="form-label">telefone*</label>
            <input type="text" id="id_contato" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="id_contato" class="form-label">Endereço*</label>
            <input type="text" id="id_contato" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="id_contato" class="form-label">Complemento*</label>
            <input type="text" id="id_contato" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="dt_inicial">
                Data de Nascimento
            </label>
            <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
        </div>
        <div class="col-md-4">
            <label class="form-label" for="dt_inicial">
                Renda
            </label>
            <input class="form-control " type="number" name="renda" id="renda">
        </div>
        <div class="col-md-2">
            <label for="id_sexo" class="form-label">Sexo*</label>
            <select id="id_sexo" class="form-select" required>
                <option>Sexo...
                    @foreach ($sexos::orderBy('sexo')->get() as $sexo)
                <option value="{{ $sexo->id_sexo }}" @selected(($cliente && $clientes->id_sexo == $sexo->id_sexo) || old('id_sexo') == $sexo->id_sexo)>
                    {{ $sexo->sexo }}
                </option>
                @endforeach

                </option>
            </select>
        </div>



        {{-- <div class="col-md-3"> --}}
        {{-- <label for="id_pet" class="form-label">Pet*</label> --}}
        {{-- <select id="id_pet" class="form-select" required> --}}
        {{-- <option value="">Escolha...</option> --}}
        {{-- @foreach ($pet::orderBy('pet')->get() as $centro)
                    <option value="{{$centro->id_pet}}"
                        @selected(
                            (
                                $adocao &&
                                $adocao->id_pet == $centro->id_pet
                            )
                            ||
                            old('id_pet') == $centro->id_pet
                        )
                    >
                        {{ $centro->pet}}
                    </option>
                @endforeach --}}
        {{-- </select> --}}
        {{-- </div> --}}

        {{-- <div class="col-md-4">
            <label class="form-label" for="valor">Valor*</label>
            <input class="form-control" type="number" id="valor" name="valor"
                value="{{ $adocao ? $adocao->valor : old('valor') }}" required>
        </div> --}}


        {{-- <div class="col-md-12">
            <label class="form-label" for="descricao">Observaçoes*</label>
            <input class="form-control" type="text" id="descricao" name="descricao"
                value="{{ $cliente ? $cliente->descricao : old('descricao') }}" required>
        </div> --}}
        {{-- <div class="col-md-12">
            <label class="form-label" for="descricao">Descrição*</label>
            <input class="form-control" type="text" id="descricao" name="descricao"
                value="{{ $cliente ? $cliente->descricao : old('descricao') }}" required>
        </div> --}}
        <div class="col-md-2 offset-md-11">
            <input class="btn btn-primary" type="submit" value="{{ $cliente ? 'Atualizar' : 'Cadastrar' }}">
        </div>


    </form>
@endsection
@section('scripts')
    @parent
@endsection
