<div class="row">
    <div class="col-lg-4">
        <label for="autorInput" class="fw-semibold">Nome: </label>
        <input type="text" class="form-control" name="name" value="{{ old('name', $user->name ?? '') }}"
            id="autorInput" placeholder="Nome...">
    </div>
    <div class="col-lg-4">
        <label for="autorInput" class="fw-semibold">E-Mail: </label>
        <input type="text" class="form-control" name="email" value="{{ old('email', $user->email ?? '') }}"
            id="autorInput" placeholder="E-Mail...">
    </div>
    <div class="col-lg-4">
        <label for="autorInput" class="fw-semibold">Password: </label>
        <input type="password" class="form-control" name="password" value="{{ old('password', $user->password ?? '') }}"
            id="autorInput" placeholder="Password...">
    </div>
    <div class="col-lg-4">
        <label for="autorInput" class="fw-semibold">Confirmar Password: </label>
        <input type="password" class="form-control" value="{{ old('password_confirmation', $user->password ?? '') }}"
           id="password-confirm" name="password_confirmation" required autocomplete="new-password">
    </div>
    <div class="col-lg-4">
        <label for="role" class="fw-semibold">Função: </label>
        <select name="role" id="role" class="form-control">

            <option value="admin">Administrador</option>
            <option value="editor">Editor</option>
            <option value="{{ old('role', $user->role ?? 'user') }}" slected>
                {{ old('role', $user->role ?? 'Utilizador') }}</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 m-4">
        <button type="submit" class="btn btn-dark"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
