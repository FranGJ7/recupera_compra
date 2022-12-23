<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de usuários
        </h2>
    </x-slot>

 



    <div>
@if (count($users) > 0)
    @foreach ($users as $user)
        <p>{{ $user->name }} - {{ $user->email }}</p>


        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-button type="submit" >Delete</x-button>
                </form>

    @endforeach
@else
    <p>Nenhum usuário encontrado.</p>
@endif
<form action="/dashboard" method="GET">
  <input type="text" name="search" placeholder="Pesquisar usuário">
  <button type="submit">Pesquisar</button>
</form> 

</x-app-layout>
