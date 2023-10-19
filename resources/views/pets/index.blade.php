@extends('layouts.base')
@section('content')
<h1>
    <i class="bi bi-wallet2"></i>
    - Pets
    |
    <a class="btn btn-primary" href="{{ route('pets.create') }}">
        Cadastro De Pet
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
    <label class="form-label" for="id_pet">Digite o nome do animal</label>
    <form action="{{ route('pets.create') }}" method="get">
        <input class="form-control col-md-4" type="search" name="search" id="search"
         placeholder="Digite aqui"
            value="{{ old('search',request()->get('search')) }}">

        {{-- data inicial --}}
        <div class="col-md-3">
            <label class="form-label" for="idade">
                Digite a idade
            </label>
            <input class="form-control"
            type="number" name="idade" id="idade">
        </div>
        <div class="col-md-3">
            <label for="id_pet" class="form-label">Especie</label>
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
{{-- Barra de pesquisa --}}
        <div class="col-md-8">
            <input class="btn btn-success col-md-2" type="submit" value="Pesquisar"
            href="{{ route('pets.index') }}">
            </div>
{{-- Barra de pesquisa --}}

{{-- Limpar --}}
<br>
        <div class="col-md-8">
        <a class="btn btn-primary col-md-1"
          href="{{ route('pets.index') }}">
          <i class="fa-solid fa-broom"></i>
         Limpar
        </a>
        </div>

 {{-- Limpar --}}

    </form>
</div>
{{-- /pesquisa --}}
<div class="table-responsive">
    <table class="table table-striped  table-hover ">
        <thead>
            <tr>
                <th></th>
                <th>Pet</th>
                <th>Idade</th>
                <th>Raça</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($pets as $pet )
            <tr>
                <td scope="row" class="col-2">
                    <div class="flex-column">
                        {{-- ver anexo --}}
                        {{-- {{ Storage::url('/anexos/'.$lancamento->anexo)}} --}}
                        @if ($pet->anexo)
                        <a class="btn btn-success" href="{{ Storage::url('/anexos/'.$pet->anexo)}}"
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
                {{-- <td>{{ $pets->data->format('d/m/Y') }}</td> --}}
                {{-- <td>{{ $pet->id_pet }}</td> --}}
                 <td>{{ $pet->pet }}</td>
                 <td>{{ $pet->idade }}</td>
                 <td>{{ $pet->racas->raca }}</td>
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
