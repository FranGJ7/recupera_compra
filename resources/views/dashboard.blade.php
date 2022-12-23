<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de usuários
        </h2>   
    </x-slot>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<form class="mt-3" action="/dashboard" method="GET">
  <input type="text" name="search" placeholder="Pesquisar usuário">
  <x-button type="submit">Pesquisar</x-button>
</form> 

@if (count($users) > 0)
    @foreach ($users as $user)
        <p class="mt-3">{{ $user->name }} - {{ $user->email }}</p>
        <div class="mt-1">
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-button type="submit" >Delete</x-button>
        </form>
        </div>
    @endforeach
@else
    <p>Nenhum usuário encontrado.</p>
@endif
</div>

</x-app-layout>