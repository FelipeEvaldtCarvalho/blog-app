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
            <a href="#"><ion-icon name="person-outline"></ion-icon></a>
        </div>
    </div>
    <div class="container-blog">
        @yield('content')
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