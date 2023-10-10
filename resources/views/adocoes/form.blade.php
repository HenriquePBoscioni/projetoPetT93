@extends('layouts.base')
@section('content')
    <h1 class="mx-3 my-4">
        <i class="bi bi-wallet2"></i>
        @if ($adocao)
            Editar adocao:
            Nº {{ $adocao->id_adocao }}
        @else
            Novo adocao
        @endif
    </h1>
    <form action="{{ $adocao ? route('adocoes.update', ['id' => $adocao->id_adocao]) : route('adocoes.store') }}"
        method="post" enctype="multipart/form-data" class="row g-3">
        @csrf




        <div class="col-md-6">
            <label for="id_cliente" class="form-label">Clientes*</label>
            <select name="id_cliente" id="id_cliente" class="form-select">
                <option>Clientes...</option>
                @foreach ($clientes::all() as $cliente)
                    <option value="{{$cliente->id_cliente}}"
                    @selected(($adocao && $adocao->id_cliente == $cliente->id_cliente) || old('id_cliente') == $cliente->id_cliente)>
                    {{ $cliente->cliente}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="id_cliente" class="form-label">Pets*</label>
            <select id="id_cliente" class="form-select" required>
                <option>Pets...</option>
                @foreach ($pets::all() as $pet)
                <option value="{{$pet->id_pet}}"
                @selected(($adocao && $adocao->id_pet == $pet->id_pet) || old('id_pet') == $pet->id_pet)>
                {{ $pet->pet}}
                </option>
            @endforeach

            </select>
        </div>

        <div class="col-md-4">
            <label for="id_cliente" class="form-label">Status*</label>
            <select id="id_cliente" class="form-select" required>
                <option>Escolha...</option>
                @foreach ($status::all() as $status)
                <option value="{{$status->id_status}}"
                @selected(($adocao && $adocao->id_status == $status->id_status) || old('id_status') == $status->id_status)>
                {{ $status->status}}
                </option>
            @endforeach

            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label" for="dt_inicial">
                Data da adocao*
            </label>
            <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
        </div>

        <div class="col-md-4">
            <label class="form-label" for="dt_inicial">
                Data da devolucao do pet*
            </label>
            <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
        </div>


        {{-- <div class="col-md-3">
        <label for="id_pet" class="form-label">Pet*</label> --}}
        {{-- <select id="id_pet" class="form-select" required> --}}
        {{-- <option value="">Escolha...</option> --}}
        {{-- @foreach ($pet::orderBy('pet')->get() as $centro) --}}
        {{-- <option value="{{$centro->id_pet}}" --}}
        {{-- @selected( --}}
        {{-- ( --}}
        {{-- $adocao && --}}
        {{-- $adocao->id_pet == $centro->id_pet --}}
        {{-- ) --}}
        {{-- || --}}
        {{-- old('id_pet') == $centro->id_pet --}}
        {{-- ) --}}
        {{-- > --}}
        {{-- {{ $centro->pet}} --}}
        {{-- </option> --}}
        {{-- @endforeach --}}
        {{-- </select> --}}
        {{-- </div> --}}



        <div class="col-md-12">
            <label class="form-label" for="descricao">Observaçoes*</label>
            <input class="form-control" type="text" id="descricao" name="descricao"
                value="{{ $adocao ? $adocao->descricao : old('descricao') }}" required>
        </div>
        <div class="col-md-12">
            <label class="form-label" for="descricao">Historico da Adocao*</label>
            <input class="form-control" type="text" id="descricao" name="descricao"
                value="{{ $adocao ? $adocao->descricao : old('descricao') }}" required>
        </div>
        <div class="col-md-2 offset-md-11">
            <input class="btn btn-primary" type="submit" value="{{ $adocao ? 'Atualizar' : 'Cadastrar' }}">
        </div>


    </form>
@endsection
@section('scripts')
    @parent
@endsection
