@extends('layouts.main')

@section('title',  'Listagem do Usuário')


@section('Content')
<h1>Listar usuário {{$user->name}}</h1>

    <ul>
        <li> {{ $user->name }} </li>
        <li> {{ $user->email }} </li>
    </ul>

    <a href="{{ route('users.index') }}">Inicio</a>
@endsection