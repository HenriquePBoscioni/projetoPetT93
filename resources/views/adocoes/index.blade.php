@extends('layouts.base')
@section('content')
<h1>
    <i class="bi bi-wallet2"></i>
    - ADOÇÕES
    |
    <a class="btn btn-primary" href="{{ route('adocoes.create') }}">
        Novas adoções
    </a>
</h1>

{{-- alerts --}}
@include('layouts.partials.alerts')
{{-- /alerts --}}
{{-- paginação --}}
{!! $adocoes->appends([
                            'search'=>request()->get('search','')
                        ])->links() !!}
{{-- /paginação --}}
{{-- pesquisa --}}
<div class="row">
    <form action="{{ route('adocoes.index') }}" method="get">

        <input class="form-control col-md-4" type="search" name="search" id="search"
            placeholder="Digite o que deseja pesquisar..."
            value="{{ old('search',request()->get('search')) }}">

        {{-- data inicial --}}
        <div class="col-md-3">
            <label class="form-label" for="dt_inicial">
                Data inicial
            </label>
            <input class="form-control"
            type="date" name="dt_inicial" id="dt_inicial">
        </div>
        {{-- /data inicial --}}
        {{-- data final --}}
        <div class="col-md-3">
            <label class="form-label" for="dt_final">
                Data final
            </label>
            <input
            class="form-control" type="date"
            name="dt_final" id="dt_final">
        </div>
        {{-- /data final --}}
        <div class="col-md-3">
            <label for="id_adocao" class="form-label">Centro de Custo*</label>
            <select id="id_adocao" name="id_adocao" class="form-select" >
                <option value="">Escolha...</option>
                @foreach ($adocoes->get() as $adocao )
                <option value="{{$adocao->adocoes}}">
                    {{ $adocao->adocoes}}
                </option>
                @endforeach
            </select>
        </div>



        <input class="btn btn-success col-md-1" type="submit" value="Pesquisar">

        @if(request()->get('search') !='')
        <a class="btn btn-primary col-md-1"
            href="{{ route('lancamento.index') }}">
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
                <th>Vencimento</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Centro de Custo</th>
                <th>Descrição</th>
                <th>Usuário</th>
                <th>Data do lançamento</th>
            </tr>
        </thead>
    </table>
</div>

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
@endsection
@section('scripts')
@parent

@endsection
