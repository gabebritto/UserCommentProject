@extends('layouts.main')

@section('title', "Criar comentário")

@section('Content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Novo Comentário para o usuário {{ $user->name }}</h1>

@include('includes.validations-form')

    <form action="{{ route('comments.store', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
        @include('users.comments._partials.form')
    </form>
@endsection