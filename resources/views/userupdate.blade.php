<form action="{{ route('usuarios.atualizar', $usersupdate->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $usersupdate->nome }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $usersupdate->email }}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>