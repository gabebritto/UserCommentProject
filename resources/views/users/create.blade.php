@extends('layouts.main')

@section('title', 'Criar usuário')

@section('Content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Cadastrar Usuário</h1>
@include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post">
        @include('users._partials.form')
    </form>
@endsection