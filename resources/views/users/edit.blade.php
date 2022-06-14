@extends('layouts.main')

@section('title', "Editar usuário")

@section('Content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Editar Usuário</h1>
@include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('users._partials.form')
    </form>

    <div class="py-4">
        <a href="{{ route('users.index') }}" class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Inicio</a>
    </div>
@endsection