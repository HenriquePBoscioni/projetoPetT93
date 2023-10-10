@extends('layouts.base')
@section('content')
    <h1>
        <i class="bi bi-wallet2"></i>
        - Clientes
        |
        <a class="btn btn-primary" href="{{ route('clientes.create') }}">
            Novos clientes
        </a>
    </h1>

    {{-- alerts --}}
    @include('layouts.partials.alerts')
    {{-- /alerts --}}
    {{-- paginação --}}
    {!! $clientes->links() !!}
    {{-- /paginação --}}
    {{-- pesquisa --}}
<<<<<<< HEAD
    <form action="{{ route('cliente.index') }}" method="get">
=======
    <form action="{{ route('clientes.index') }}" method="get">
>>>>>>> master

        <div class="row ">

            {{-- <div class="col-md-5">
                Nome
                <input class="form-control col-md-6 " type="search" name="search" id="search"
                    placeholder="Digite o nome do Cliente..." value="{{ old('search', request()->get('search')) }}">
            </div>

            <div class="col-md-5">
                Idade
                <input class="form-control col-md-6" type="search" name="search" id="search"
                    placeholder="Digite a idade do Cliente..." value="{{ old('search', request()->get('search')) }}">
            </div> --}}

            {{-- data inicial --}}
            {{-- <div class="col-md-4">
                <label class="form-label" for="dt_inicial">
                    Data inicial
                </label>
                <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
            </div> --}}
            {{-- /data inicial --}}

            {{-- data final --}}
            {{-- <div class="col-md-4">
                <label class="form-label" for="dt_final">
                    Data final
                </label>
                <input class="form-control" type="date" name="dt_final" id="dt_final">
            </div> --}}
            {{-- /data final --}}

            {{-- <div class="col-md-3">
                <label for="id_cliente" class="form-label">Sexo</label>
                <select id="id_cliente" name="id_cliente" class="form-select">
                    <option value="">Escolha...</option>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->clientes }}">
                            {{ $cliente->clientes }}
                        </option>
                    @endforeach
                </select>
            </div> --}}

            {{-- <div>
                <br>
                <input class="btn btn-success col-md-1" type="submit" value="Pesquisar">
            </div> --}}

            @if (request()->get('search') != '')
                <a class="btn btn-primary col-md-1" href="{{ route('lancamento.index') }}">
                    Limpar
                </a>
            @endif

    </form>
    </div>
    {{-- /pesquisa --}}
    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Dt. Nascimento</th>
                    <th>renda</th>
                    <th>Sexo</th>
                    {{-- <th>Data inicial</th>
                    <th>Data Final</th> --}}
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @forelse ($clientes as $cliente)
                    <tr>
                        <td scope="row" class="col-2">
                            <div class="flex-column">
                                {{-- ver anexo --}}
                                {{-- {{ Storage::url('/anexos/'.$lancamento->anexo)}} --}}

                                {{-- @if ($pet->anexo)
                <a class="btn btn-success" href="{{ Storage::url($pet->anexo)}}"
                    target="_blank">
                    <i class="bi bi-paperclip"></i>
                </a>
                @endif --}}

                                {{-- editar --}}
                                <a class="btn btn-dark" href="#">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                {{-- excluir --}}
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalExcluir" data-identificacao="" data-url="">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>

                        <td>{{ $cliente->cliente }}</td>
                        <td>{{ $cliente->nascimento }}</td>
                        <td>R${{ $cliente->renda }}</td>
                        <td>{{ $cliente->Sexos->sexo }}</td>

                        {{-- <td>
                            @if ($adocao->HistoricoAdocoes()->count() > 0)
                                @foreach ($adocao->HistoricoAdocoes()->get() as $item)
                                   - {!! substr($item->historico,20) !!}...<br>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            {{ $adocao->created_at->format('d/m/Y \a\s H:i') }}h
                        </td>
                        <td></td> --}}


                    </tr>
                @empty
                    <tr>
                        <td colspan="8">
                            Nenhum registro retornado
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- Modal Excluir --}}
    @include('layouts.partials.modalExcluir')
    {{-- /Modal Excluir --}}
@endsection
@section('scripts')
    @parent
@endsection
