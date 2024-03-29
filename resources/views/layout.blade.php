<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <div class="stripes"></div>
    <div class="navbar">
        <div class="social">
            <a href="#"><ion-icon class="ion-icon" name="logo-instagram"></ion-icon></a>
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        </div>
        <div class="logo">
            <a class="menu" href="#">ARTIGOS</a>
            <a href="/" class="logo-link">
                <img src="/images/logo_no_bg.png" alt="logo">
                <img class="logo-hide" src="/images/stars_no_bg.png" alt="logo">
            </a>
            <a class="menu" href="#">SOBRE</a>
        </div>
        <div class="icons">
            @auth
                <div class="auth-box">
                    <p>{{ auth()->user()->name }}</p>
                    <a id="acc-btn" ><ion-icon name="person-outline"></ion-icon></a>
                    <div id="account-opt" class="close-opt account-opt">

                        @if(auth()->user()->name == 'felipe carvalho')
                        <a href="/admin/posts">Meus Posts</a>
                        <a href="/admin/posts/create">Novo Post</a>
                        @endif
                        <a id="logout-btn" href="#">Sair</a>
                        <form method="post" id="logout-form" action="/logout" style="visibility: hidden">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <a id="acc-btn" ><ion-icon name="person-outline"></ion-icon></a>
                <div id="account-opt" class="account-opt">
                    <a href="/login">Fazer login</a>
                    <a href="/register">Criar conta</a>
                </div>
            @endauth
        </div>
    </div>
    @if(session()->has('success'))
    <div id="success-msg" class="notification-container">
        <div class="notification-box">
            <ion-icon name="checkmark-circle-outline"></ion-icon>
            <p>{{ session('success') }}</p>
        </div>
    </div>
    @endif
    @if(session()->has('email'))
    <div id="success-msg" class="notification-container">
        <div class="notification-box notification-alert">
            <ion-icon name="alert-outline"></ion-icon>
            <p>{{ session('email') }}</p>
        </div>
    </div>
    @endif
    <div class="container-blog">
        @yield('content')
    </div>
    <div class="news-container">
        <div class="news-title-box">
            <img src="/images/mail.png" height="120px">
            <div>
                <h2>Mantenha-se informado!</h3>
                <h3>Receba as novidades em seu e-mail</h4>
            </div>
        </div>
        <form method="POST" class="news-form" id="newsletter" action="/subscribe">
            @csrf
            <div class="input-box">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" name="email">
                <button type="submit" class="news-btn">Enviar</button>
            </div>
        </form>

    </div>
    <div class="line"></div>
    <footer>
        <div class="c-3">
            <img src="/images/pantera.png" alt="" height="75px">
        </div>
        <div class="c-3 footer-text">
            <p>Direitos reservados &copy; Airmid</p>
        </div>
        <div class="c-3">

        </div>
    </footer>
    <div class="stripes">
    </div>


</body>
<script src="{{ asset('scripts.js') }}"></script>
</html>
