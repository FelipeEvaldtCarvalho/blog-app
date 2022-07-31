@extends('layout')

@section('content')
    <div class="form-container">
        <a class="back-link register-back" href="/"><ion-icon name="chevron-back-outline"></ion-icon>Voltar</a>
        <div class="register-form">
            <form class="form-box" method="POST" action="/login">
                @csrf
    
                <div class="form-title">
                    <h2>Fazer Login</h2>
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
                </div>
                <div class="button-group">
                    <button class="btn-register" type="submit">Login</button>
                    <a class="registered-link" href="/register">Não tem uma conta?</a>
                </div>
    
            
            </form>
        </div>
    </div>
@endsection