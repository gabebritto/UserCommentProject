@extends('layouts.main')

@section('title', "Editar comentário")

@section('Content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Editar Usuário</h1>
@include('includes.validations-form')

    <form action="{{ route('comments.update', ['id' => $comment->id]) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('users.comments._partials.form')
    </form>
@endsection