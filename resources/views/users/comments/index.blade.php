@extends('layouts.main')

@section('title', "Comentários do Usuário")

@section('Content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Comentários do usuário {{$user->name}}
        <a href="{{ route('comments.create', ['id' => $user->id]) }}" class="bg-blue-900 text-white px-4 rounded-full text-sm">+</a>
    </h1>

    <form action="{{ route('comments.index', ['id' => $user->id]) }}" method="get" class="py-5">
        <input type="text" name="search" placeholder="Pesquisar:" class="md:w-2/6 bg-blue-50 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4" value="{{ request()->search }}">
        <button class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
    </form>

    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Comentário</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Visivel</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($comments as $comment)
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    {{ $comment->body }}
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $comment->visible ? "Sim" : "Não" }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href="{{ route('comments.edit', ['user' => $user->id ,'id' => $comment->id]) }}" class="bg-green-200 rounded-full py-2 px-6">Edit</a></td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href=" {{ route('users.show', ['id' => $user->id]) }}" class="bg-yellow-200 rounded-full py-2 px-6">Details</a></td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="py-4">
        {{ $comments->links() }}
    </div>
@endsection
