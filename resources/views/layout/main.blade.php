<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Main')</title>
    <link rel="stylesheet" href="public/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="icon" type="image/png" href="{{ asset('/favicon.ico') }}">
    <link href="{{ asset('public/css/app.css') }} " rel="stylesheet" />
    <script src="public/js/app.js"></script>
</head>
<body>
<header class="header">
    <div class="header__row">
        <a href="{{ route('main') }}" class="header__logo">Золушка</a>
    </div>
    <div class="header__row">
        <div class="header__nav nav">
            <div class="nav__col"><a class="nav__link nav__link_hover" href="{{ route('main') }}">Главная</a></div>
            <div class="nav__col"><a class="nav__link nav__link_hover" href="{{ route('catalog') }}">Каталог</a></div>
            <div class="nav__col"><a class="nav__link nav__link_hover" href="{{ route('about') }}">О нас</a></div>
            @if(\Illuminate\Support\Facades\Auth::user())
                <div class="nav__col"><a class="nav__link nav__link_hover" href="{{ route('product.add') }}">Добавить товар</a></div>
                <div class="nav__col"><a class="nav__link nav__link_hover" href="{{ route('logout') }}">Выход</a></div>
            @elseif(!\Illuminate\Support\Facades\Auth::user())
                <div class="nav__col"><a class="nav__link nav__link_hover" href="{{ route('auth') }}">Авторизация</a></div>
            @endif
        </div>
    </div>
</header>
<main class="main">
    @yield('content')
</main>
<footer class="footer">
    <div class="footer__content">
        <div class="footer__copyright">
            <span class="footer__text">&copy; 2020 «Золушка» ИП Шведова</span>
        </div>
        <div class="footer__address">
            <span class="footer__text">г. Сим, ул. Пушкина, д. 11</span>
        </div>
        <div class="footer__company">
            <a href="tel:880035151" class="footer__text footer__link">8 (800) 351-51-51</a>
        </div>

    </div>
</footer>
<script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
