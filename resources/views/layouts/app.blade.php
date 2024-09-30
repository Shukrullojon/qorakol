<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Arif Solar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("arifsolar/css/carousel.css")}}">
    <link rel="stylesheet" href="{{ asset("arifsolar/css/main.css")}}">
    <link rel="stylesheet" href="{{ asset("arifsolar/css/responsive.css")}}">
</head>
<body>

<section class="header-top" id="header-top">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
        <h1 class="header-top-title">@lang('front.info_header')</h1>
        <button class="header-top-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <rect width="32" height="32" rx="16" fill="white" fill-opacity="0.4"/>
                <path d="M21.8242 20.9752C21.8799 21.031 21.9241 21.0971 21.9543 21.17C21.9845 21.2428 22 21.3209 22 21.3997C22 21.4785 21.9845 21.5566 21.9543 21.6294C21.9241 21.7023 21.8799 21.7684 21.8242 21.8242C21.7684 21.8799 21.7023 21.9241 21.6294 21.9543C21.5566 21.9845 21.4785 22 21.3997 22C21.3209 22 21.2428 21.9845 21.17 21.9543C21.0971 21.9241 21.031 21.8799 20.9752 21.8242L16 16.8482L11.0248 21.8242C10.9122 21.9368 10.7595 22 10.6003 22C10.4411 22 10.2884 21.9368 10.1758 21.8242C10.0632 21.7116 10 21.5589 10 21.3997C10 21.2405 10.0632 21.0878 10.1758 20.9752L15.1518 16L10.1758 11.0248C10.0632 10.9122 10 10.7595 10 10.6003C10 10.4411 10.0632 10.2884 10.1758 10.1758C10.2884 10.0632 10.4411 10 10.6003 10C10.7595 10 10.9122 10.0632 11.0248 10.1758L16 15.1518L20.9752 10.1758C21.0878 10.0632 21.2405 10 21.3997 10C21.5589 10 21.7116 10.0632 21.8242 10.1758C21.9368 10.2884 22 10.4411 22 10.6003C22 10.7595 21.9368 10.9122 21.8242 11.0248L16.8482 16L21.8242 20.9752Z" fill="white"/>
            </svg>
        </button>
    </div>
</section>
<section class="header-hero-section">
    <header>
        <div class="container header-container">
            <div class="header-left-box">
                <img src="{{ asset("arifsolar/images/Logo-1.svg")}}" alt="logo" width="305" height="58">
                <span class="header-left-line"></span>
                <h3 class="header-left-title">@lang('front.logo_1') <br>
                    @lang('front.logo_2')</h3>

            </div>
            <div class="header-rigt-box">
                <a href="tel:712030056" class="header-tell">
                    <img class="header-tell-img" src="{{ asset("arifsolar/images/phone-vector.svg")}}" alt="phone" width="24" height="24">
                    71 203 00 56
                </a>
                <span class="header-left-line"></span>
                <a class="header-telegram-icon" href="https://t.me/solarzoneuz">
                    <img src="{{ asset("arifsolar/images/telegram-icon.svg")}}" alt="telegram" width="44" height="44">
                </a>
                <span class="header-left-line"></span>
                @php
                    $lang = App::getLocale('locale') == "uz" ? "ru" : "uz";
                    $img = App::getLocale('locale') == "uz" ? "lang_icon_uz.svg" : "lang-icon.svg";
                @endphp
                <a href="{{ route("language",$lang) }}">
                    <button class="header-lang-icon">
                        <img src="{{ asset("arifsolar/images/$img") }}" alt="telegram" width="44" height="44">
                    </button>
                </a>
            </div>
            <button class="hamburger-btn"></button>
        </div>
    </header>
    <div class="container hero">
        <div class="hero-box">
            <h3 class="hero-title">
                @lang('front.hero_title')
            </h3>
            <p class="hero-desc">
                @lang('front.hero_desc')
            </p>
            <form class="hero-form" id="hero-form" action="mailto:arial.uz@gmail.com" method="post" enctype="text/plain" autocomplete="off">
                <input class="hero-name-input" type="text" name="name" placeholder="@lang('front.name')" required>
                <input class="hero-tel-input" type="tel" value="+998" name="Tell number" placeholder="+998 99 -000-00-00" required>
                <button class="hero-btn" type="submit" id="hero-btn">@lang('front.button_submit')<span class="hero-btn-icon"></span></button>
            </form>
        </div>
    </div>
</section>

@yield('content')

<footer>
    <div class="container">
        <h3 class="footer-title">@lang('front.reserved') © Aril.uz</h3>
    </div>
</footer>

<div class="our-work-modal hidden" id="ourWorkModal">
    <div class="modal ">
        <!-- <button class="close-modal">&times;</button> -->
        <div class="modal-box">
            <div class="modal-carousel-box">
                <div class="center modal-center">
                    <div class="wrapper modal-wrapper">
                        <div class="inner modal-inner">
                            <div class="card modal-card">
                                <div class="content modal-content">
                                    <img src="{{ asset("arifsolar/images/modal-img.png")}}" alt="img" width="562" height="480">
                                </div>
                            </div>
                            <div class="card modal-card">
                                <div class="content modal-content">
                                    <img src="{{ asset("arifsolar/images/modal-img.png")}}" alt="img" width="562" height="480">
                                </div>
                            </div>
                            <div class="card modal-card">
                                <div class="content modal-content">
                                    <img src="{{ asset("arifsolar/images/modal-img.png")}}" alt="img" width="562" height="480">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map modal-map">
                    <button class="active first"></button>
                    <button class="second"></button>
                    <button class="third"></button>
                </div>
            </div>
            <p class="modal-desc">
                <span class="modal-desc-span">Arif Solar, Arif International Holdingning energetika yo'nalishidagi sho' ba korxonasi xisoblanadi. </span>Korxonamizning
                quyosh elektr stansiyalarini qurishuchun dunyoning eng sifatli barcha hom ashyo va mahsulotlarni olib
                kelish va o'rnatish bilan shug'ullanadi.
                Asosiy magsadlarimizdan biri O'zbekistonda gaytatiklanuvchi elektr energiya manbaylarini ko'paytirish
                orgali, tabiatga keltirilayotgan zararlarni kamaytirish!
            </p>
        </div>
    </div>
    <div class="overlay" id="modalOverlay"></div>
</div>

<div class="hamburger-modal hidden" style="transition: 0.3s;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="hamburger-modal-box">
            <a href="tel:712030056" class="header-tell">
                <img class="header-tell-img" src="{{ asset("arifsolar/images/phone-vector.svg")}}" alt="phone" width="24" height="24">
                71 203 00 56
            </a>
            <span class="header-left-line"></span>
            <a class="header-telegram-icon" href="https://t.me/solarzoneuz">
                <img src="{{ asset("arifsolar/images/telegram-icon.svg")}}" alt="telegram" width="44" height="44">
            </a>
            <span class="header-left-line"></span>
            <button class="header-lang-icon">
                <img src="{{ asset("arifsolar/images/lang-icon.svg")}}" alt="telegram" width="44" height="44">
            </button>
        </div>
        <button class="close-hamburger-modal"></button>
    </div>
</div>

<script src="{{ asset("arifsolar/js/index.js")}}"></script>
<script src="{{ asset("arifsolar/js/carousel.js")}}"></script>
</body>
</html>
