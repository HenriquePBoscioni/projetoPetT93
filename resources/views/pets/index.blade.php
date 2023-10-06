@extends('layouts.base')
@section('content')
<h1>
    <i class="bi bi-wallet2"></i>
    - Pets
    |
    <a class="btn btn-primary" href="{{ route('pets.create') }}">
        Nova Cadastro De Pet
    </a>
</h1>

{{-- alerts --}}
@include('layouts.partials.alerts')
{{-- /alerts --}}
{{-- paginação --}}
{!! $pets->appends([
                            'search'=>request()->get('search','')
                        ])->links() !!}
{{-- /paginação --}}
{{-- pesquisa --}}
<div class="row">
    <form action="{{ route('pets.create') }}" method="get">

        <input class="form-control col-md-4" type="search" name="search" id="search"
            placeholder="Digite o Nome do pet..."
            value="{{ old('search',request()->get('search')) }}">

        {{-- data inicial --}}
        <div class="col-md-3">
            <label class="form-label" for="dt_inicial">
                Data Nasc.
            </label>
            <input class="form-control"
            type="date" name="dt_inicial" id="dt_inicial">
        </div>
        <div class="col-md-3">
            <label for="id_pet" class="form-label">Raça</label>
            <select id="id_pet" name="id_pet" class="form-select" >
                <option value="">Escolha...</option>
                <option value="">Cachorros</option>
                <option value="">Gatos</option>
                <option value="">Avee</option>
                <option value="">Repetil</option>
                <option value="">Roedores</option>

                @foreach ($pets as $pet )
                <option value="{{$pet->id_pets}}">
                    {{ $pet->pets}}
                </option>
                @endforeach
            </select>
        </div>

        <br>
        {{-- /data inicial --}}
        {{-- data final --}}
        {{-- <div class="col-md-3">
            <label class="form-label" for="dt_final">
                Data final
            </label>
            <input
            class="form-control" type="date"
            name="dt_final" id="dt_final">
        </div> --}}
        {{-- /data final --}}


        <input class="btn btn-success col-md-2" type="submit" value="Pesquisar">

        @if(request()->get('search') !='')
        <a class="btn btn-primary col-md-1"
            href="{{ route('pets.create') }}">
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
                <th>Pet</th>
                <th>Data Nasc.</th>
                <th>Raça</th>
                {{-- <th>Centro de Custo</th>
                <th>Descrição</th>
                <th>Usuário</th>
                <th>Data do lançamento</th> --}}
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($pets as $pets )
            <tr>
                <td scope="row" class="col-2">
                    <div class="flex-column">
                        {{-- ver anexo --}}
                        {{-- {{ Storage::url('/anexos/'.$lancamento->anexo)}} --}}
                        @if ($pets->anexo)
                        <a class="btn btn-success" href="{{ Storage::url('/anexos/'.$pets->anexo)}}"
                            target="_blank">
                            <i class="bi bi-paperclip"></i>
                        </a>
                        @endif

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
                <td>{{ $pets->vencimento->format('d/m/Y') }}</td>
                <td>{{ $pets->tipo->tipo }}</td>
                <td>{{ $pets->valor }}</td>
                <td>{{ $pets->centroCusto->centro_custo }}</td>
                <td>{{ $pets->descricao }}</td>
                <td>{{ $pets->usuario->name }}</td>
                <td>
                    {{ $pets->created_at->format('d/m/Y \a\s H:i') }}h
                </td>
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
