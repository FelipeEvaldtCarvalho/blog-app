@extends('layout')

@section('content')
    <div class="form-container">
        <a class="back-link register-back" href="/"><ion-icon name="chevron-back-outline"></ion-icon>Voltar</a>
        <div class="register-form">
            <form class="form-box" method="POST" action="/register">
                @csrf
    
                <div class="form-title">
                    <h2>Crie sua conta</h2>
                </div>
                <div class="form-group">
                    <label for="username">Nome de Usuário</label>
                    <input type="text" name="username" placeholder="username" value="{{ old('username') }}">
                    @error('username')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name"  placeholder="nome" value="{{ old('name') }}">
                    @error('name')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email"  placeholder="e-mail" value="{{ old('email') }}">
                    @error('email')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password"  placeholder="senha">
                    @error('password')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="button-group">
                    <button class="btn-register" type="submit">Registrar</button>
                    <a class="registered-link" href="#">Já tem uma conta?</a>
                </div>
    
            
            </form>
        </div>
    </div>
@endsection