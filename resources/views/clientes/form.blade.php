@extends('layouts.base')
@section('content')
<h1>
    @if ($centro)
        Editando Clientes
        {{ $centro->centro_custo }}
    @else


    @endif
</h1>
