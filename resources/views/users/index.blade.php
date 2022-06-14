@extends('layouts.main')

@section('title', 'Listagem de Usuários')

@section('Content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Lista de Usuários
        <a href="{{ route('users.create') }}" class="bg-blue-900 text-white px-4 rounded-full text-sm">+</a>
    </h1>

    <form action="{{ route('users.index') }}" method="get" class="py-5">
        <input type="text" name="search" placeholder="Pesquisar:" class="md:w-2/6 bg-blue-50 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4">
        <button class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
    </form>

    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Foto</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Nome</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Email</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Editar</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Detalhes</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Comentários</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    @if ($user->image)
                        <img src="{{ url("storage/{$user->image}") }}" alt="User_Image" class="object-cover w-20">
                    @else
                        <img src="{{ url("images/UserDefault.webp") }}" alt="Default_Image" class="object-cover w-20">                        
                    @endif
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->name }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href="{{ route('users.edit', ['id' => $user->id]) }}" class="bg-green-300 rounded-full py-2 px-6">Edit</a></td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href=" {{ route('users.show', ['id' => $user->id]) }}" class="bg-green-300 rounded-full py-2 px-6">Details</a></td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href=" {{ route('comments.index', ['id' => $user->id]) }}" class="bg-green-300 rounded-full py-2 px-6">Comentários ({{$user->comments->count()}})</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="py-4">
        {{ $users->links() }}
    </div>
@endsection
