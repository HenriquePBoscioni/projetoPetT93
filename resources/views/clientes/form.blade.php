<<<<<<< HEAD
@extends('layouts.base')
@section('content')
    <h1 class="mx-3 my-4">
        <i class="bi bi-wallet2"></i>
        @if ($cliente)
            Editar adocao:
            Nº {{ $cliente->id_cliente }}
        @else
            Novo adocao
        @endif
    </h1>
    <form action="{{ $cliente ? route('adocoes.update', ['id' => $cliente->id_cliente]) : route('clientes.store') }}"
        method="post" enctype="multipart/form-data" class="row g-3">
        <div class="col-md-6">
            <label for="id_cliente" class="form-label">Clientes*</label>
            <select id="id_cliente" class="form-select" required>
                <option>Clientes...</option>
            </select>
        </div>

                {{-- @foreach ($clientes::orderBy('cliente')->get() as $cliente)
            <option value="{{ $cliente->id_cliente}}"
            @selected(
                (
                    $adocao &&
                    $adocao->id_cliente == $cliente->id_cliente
                )
                ||
                old('id_cliente') == $cliente->id_cliente
                )
                >
                {{ $cliente->cliente }}
            </option>
            @endforeach --}}
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label" for="dt_inicial">
                Data de Nascimento
            </label>
            <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
        </div>

        <div class="col-md-4">
            <label class="form-label" for="dt_inicial">
              Renda
            </label>
            <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
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
        <div class="col-md-12">
            <label class="form-label" for="descricao">Historico do Cliente*</label>
            <input class="form-control" type="text" id="descricao" name="descricao"
                value="{{ $cliente ? $cliente->descricao : old('descricao') }}" required>
        </div>
        <div class="col-md-2 offset-md-11">
            <input class="btn btn-primary" type="submit" value="{{ $cliente ? 'Atualizar' : 'Cadastrar' }}">
        </div>


    </form>
@endsection
@section('scripts')
    @parent
@endsection
=======
>>>>>>> master
