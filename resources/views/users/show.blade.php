@extends('layouts.main')

@section('title',  'Listagem do Usuário')


@section('Content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Listar usuário {{$user->name}}</h1>

<table class="min-w-full">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Foto</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Nome</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Email</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Deletar</th>
        </tr>
    </thead>
    <tbody>
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
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <form action="{{ route('users.destroy', $user->id) }}" method="post" class="inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="shadow bg-red-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
    <div class="py-4">
        <a href="{{ route('users.index') }}" class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Inicio</a>
    </div>
    
    
@endsection