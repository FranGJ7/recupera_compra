<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <h1>Lista de usuários</h1>
                @foreach ($users as $user)
     <div>
        {{ $user->name }}
        
               <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded" type="submit" >Delete</button>
                </form>
                </div>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
