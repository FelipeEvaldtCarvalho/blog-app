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
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="username" required>
                </div>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" required placeholder="nome">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" required placeholder="e-mail">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" required placeholder="senha">
                </div>
                <div class="button-group">
                    <button class="btn-register" type="submit">Registrar</button>
                    <a class="registered-link" href="#">Já tem uma conta?</a>
                </div>
    
            
            </form>
        </div>
    </div>
@endsection