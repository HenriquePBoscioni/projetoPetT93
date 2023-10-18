@extends('layouts.base')
@section('content')
    <h1 class="mx-3 my-4">
        <i class="bi bi-wallet2"></i>
        @if ($pet)

            Nº {{ $pet->id_pet }}
        @else
            Cadastro novo Pet
        @endif
    </h1>
    <form action="{{ $pet ? route('pets.update', ['id' => $pet->id_pet]) : route('pets.store') }}"
        method="post" enctype="multipart/form-data" class="row g-3">
        @csrf


<<<<<<< HEAD
        <div class="col-md-6">
            <label for="id_pet" class="form-label">Pets*</label>
            <select id="id_pet" id="id_pet" class="form-control"
            value="{{ $pet ? $pet->pet : old('Pets') }}"required>
                <option></option>
                <option>Cachorro...</option>
                <option>Gato</option>
                <option>Ave</option>
                <option>Reptil</option>
                <option>Roedores</option>
            </select>
        </div>

         <div class="col-md-6">
            <label for="id_raca" class="form-label">Raças*</label>
            <select id="id_raca"  id="id_raca" class="form-control"
            value="{{ $pet ? $pet->raca : old('Racas') }}" required>
                <option></option>
                <option>Pastor-Alemao</option>
                <option>Rottweiler</option>
                <option>Golden</option>
                <option>Vira-Lata</option>
                <option>Gato Persa</option>
                <option>Gato Europeu</option>
                <option>Gato Siamês</option>
                <option>Munchkin</option>
                <option>Papagaio</option>
                <option>Periquito</option>
                <option>Canario</option>
                <option>Calopsita</option>
                <option>Tartaruga</option>
                <option>Camaleao</option>
                <option>Tegu Argentino</option>
                <option>Python-Real</option>
                <option>Porquinho-da-Índia</option>
                <option>Rato-De-Estimacão(Fancy Rat)</option>
                <option>Hamster Sirio(Golden)</option>
                <option>Hamster Anão Russo</option>
            </select>
=======
        <div class="col-md-5">
            <label class="form-label" for="pet">Pet*</label>
            <input class="form-control" type="text" id="pet" name="pet"
                value="{{ $pet ? $pet->pet : old('pet') }}" required>
>>>>>>> master
        </div>

        <div class="col-md-4">
            <label class="form-label" for="idade">Idade*</label>
            <input class="form-control" type="number" id="idade" name="idade"
                value="{{ $pet ? $pet->idade : old('idade') }}" required>
        </div>

        <div class="col-md-6">
            <label for="id_especie" class="form-label">especies*</label>
            <select id="id_especie" class="form-select" required>
                <option>Escolha...</option>
                @foreach ($especies::orderBy('especie')->get() as $especie)
            <option value="{{ $especie->id_especie}}"
            @selected(
                (
                    $pet &&
                    $pet->id_especie == $especie->id_especie
                )
                ||
                old('id_especie') == $especie->id_especie
                )
                >
                {{ $especie->especie }}
            </option>
            @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="id_raca" class="form-label">Racas*</label>
            <select id="id_raca" class="form-select" required>
                <option>Escolha...</option>
                @foreach ($racas::orderBy('raca')->get() as $raca)
            <option value="{{ $raca->id_raca}}"
            @selected(
                (
                    $pet &&
                    $pet->id_raca == $raca->id_raca
                )
                ||
                old('id_raca') == $raca->id_raca
                )
                >
                {{ $raca->raca }}
            </option>
            @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="id_porte" class="form-label">Portes*</label>
            <select id="id_porte" class="form-select" required>
                <option>Escolha...</option>
                @foreach ($portes::orderBy('porte')->get() as $porte)
            <option value="{{ $porte->id_porte}}"
            @selected(
                (
                    $pet &&
                    $pet->id_porte == $porte->id_porte
                )
                ||
                old('id_porte') == $porte->id_porte
                )
                >
                {{ $porte->porte }}
            </option>
            @endforeach
            </select>
        </div>

            <div class="col-md-6">
                <label for="id_genero" class="form-label">Genero*</label>
                <select id="id_genero" class="form-select" required>
                    <option>Escolha...</option>
                    @foreach ($generos::orderBy('genero')->get() as $genero)
                <option value="{{ $genero->id_generos}}"
                @selected(
                    (
                        $pet &&
                        $pet->id_genero == $genero->id_genero
                    )
                    ||
                    old('id_genero') == $genero->id_genero
                    )
                    >
                    {{ $genero->genero }}
                </option>
                @endforeach
                </select>
            </div>


        <div class="col-md-4">
            <label  for="dt_inicial" class="form-label">Data de Nascimento*</label>
            <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
            {{-- value="{{ $pet ? $pet->Sexo : old('Sexo') }}" --}}
        </div>


        <div class="col-md-4">
            <label  for="dt_inicial" class="form-label">Data da adoção*</label>
            <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
            {{-- value="{{ $pet ? $pet->Sexo : old('Sexo') }}" --}}
        </div>






        {{-- <div class="col-md-4">
            <label class="form-label" for="dt_inicial">
                Data da devolucao do pet*
            </label>
            <input class="form-control" type="date" name="dt_inicial" id="dt_inicial">
        </div> --}}


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


        {{-- <div class="col-md-4">
            <label for="id_porte" class="form-label">Porte*</label>
            <select name="id_porte" id="id_porte" class="form-select"
            value="{{ $pet ? $pet->Sexo : old('Portes') }}" required>
                <option>Escolha...</option>
                <option>Pequeno</option>
                <option>Médio</option>
                <option>Grande</option>
            </div>
 --}}


        <div class="col-md-5">
            <label class="form-label" for="descricao">Observaçoes</label>
            <input class="form-control" type="text" id="descricao" name="descricao"
                value="{{ $pet ? $pet->descricao : old('descricao') }}" required>
        </div>





        {{-- <div class="col-md-12">
            <label class="form-label" for="descricao">Historico do pet*</label>
            <input class="form-control" type="text" id="descricao" name="descricao"
                value="{{ $pet ? $pet->descricao : old('descricao') }}" required> --}}
        </div>
        <br>
        <br>
        <div class="col-md-2 offset-md-9">
            <input class="btn btn-primary" type="submit" value="{{ $pet ? 'Atualizar' : 'Cadastrar' }}">
        </div>


    </form>
@endsection
@section('scripts')
    @parent
@endsection
