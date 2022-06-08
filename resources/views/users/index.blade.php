@extends('layouts.main')

@section('title', 'Listagem de Usuários')

@section('Content')
    <h1>Lista de Usuários
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar:">
        <button>Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} - {{ $user->email }}
                <a href="{{ route('users.edit', ['id' => $user->id]) }}">Edit</a>| <a href=" {{ route('users.show', ['id' => $user->id]) }}">Details</a>
            </li>
        @endforeach
    </ul>
@endsection
