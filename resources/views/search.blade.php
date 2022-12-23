<!--
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
<form action="/search" method="GET">
  <input type="text" name="search" placeholder="Pesquisar usuário">
  <button type="submit">Pesquisar</button>
</form> 
