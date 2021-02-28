@include('admin.includes.alerts')

<div class="form-group">
    <label for="name">Nome: </label>
    <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
</div>
<div class="form-group">
    <label for="name">E-mail: </label>
    <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ $user->email ?? old('email') }}">
</div>

<div class="form-group">
    <label for="password">Senha: </label>
    <input type="password" name="password" class="form-control" placeholder="Senha">
</div>

<div class="form-group">
    <label for="password">Confirmação de Senha: </label>
    <input type="password" name="password_confirmation"
           class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
           placeholder="{{ __('adminlte::adminlte.retype_password') }}">
    @if($errors->has('password_confirmation'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </div>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
</div>
