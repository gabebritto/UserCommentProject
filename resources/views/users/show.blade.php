@extends('layouts.main')

@section('title',  'Listagem do Usuário')


@section('Content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Listar usuário {{$user->name}}</h1>

    <ul class="my-10">
        <li> {{ $user->name }} </li>
        <li> {{ $user->email }} </li>
    </ul>

    <a href="{{ route('users.index') }}" class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Inicio</a>
@endsection