<!doctype html>
<html lang="uz">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Qorakol Ziyo</title>

    <meta charset="UTF-8" />
    <link rel="icon" href="image/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset("qorakol/css/style.css")}}" />
    <link rel="stylesheet" href="{{ asset("qorakol/css/hero.css")}}" />
    <link rel="stylesheet" href="{{ asset("qorakol/css/p_maktab.css")}}" />
    <link rel="stylesheet" href="{{ asset("qorakol/css/about-qorakol.css")}}" />
    <link rel="stylesheet" href="{{ asset("qorakol/css/reyting.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/why_qorakol.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/partners.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/thoughts.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/sciences.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/tests.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/branch.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/experience.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/enroll.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/news.css")}}"/>
    <link rel="stylesheet" href="{{ asset("qorakol/css/footer.css")}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"/>
</head>
<body>

<header class="navbar" id="navbar">
    <nav class="container navigation">
        <div class="nav__logo">
            <div class="nav__logo__img reveal">
                <a href="#">
                    <img src="{{ asset("qorakol/image/navbar/vk_logo.svg")}}" alt="" />
                </a>
            </div>
            <p class="nav__text reveal">
                Prezident va ixtisoslashtirilgan maktablariga tayyorlovchi o‘quv markaz
            </p>
        </div>
        <ul class="nav__list reveal">
            <li><a class="reveal" href="#about_qorakol">Biz haqimizda</a></li>
            <li><a class="reveal" href="#sciences">Kurslar</a></li>
            <li><a class="reveal" href="#">Natijalar</a></li>
            <li><a class="reveal" href="#filiallar">Filiallar</a></li>
            <li><a class="reveal" href="#enroll">Bog‘lanish</a></li>
            <li class="navbar__contact_list reveal">
                <div class="nav__contact">
                    <a href="tel:+99899999964400">+998 99 99 996 44 00</a>
                    <span>Biz bilan bog‘laning</span>
                </div>
            </li>
            <li class="nav__btn_list reveal">
                <a href="#enroll">
                    <button class="nav__btn btn">Bepul konsultatsiya</button>
                </a>
            </li>
        </ul>
        <div class="navbar__contact">
            <div class="nav__contact reveal">
                <a href="tel:+99899999964400">+99899 996 44 00</a>
                <span>Biz bilan bog‘laning</span>
            </div>
            <button class="nav__btn btn nav_btn_modall reveal">
                Bepul konsultatsiya
            </button>
        </div>
        <div class="nav_toggle reveal">
            <span class="common top_line"></span>
            <span class="common middle_line"></span>
            <span class="common bottom_line"></span>
        </div>
        <div class="nav_modall">
            <div class="nav_modall_register">
                <input class="enroll_box_name nav_modal_inp_name" type="text" name="" id="" placeholder="Ismingizni kiriting"/>
                <div class="enroll_box_phon phone-input">
                    <img class="phone-flag" src="{{ asset("qorakol/image/enroll/uzbekistan.svg")}}" alt=""/>
                    <label style="color: black" for="">+998</label>
                    <input type="tel" onkeydown="phoneNumberFormatter()" id="phoneInput" placeholder="(__)___-__-__"/>
                </div>
                <button class="close_nav_modall">Yopish</button>
                <button class="enroll_box_btn">Jo'natish</button>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<footer class="section footer">
    <div class="container">
        <div class="footer_box">
            <div class="footer_top">
                <div class="footer_logo">
                    <img class="reveal" src="{{ asset("qorakol/image/footer/Qorakol logo.svg")}}" alt="" />
                    <p class="reveal">
                        Prezident va ixtisoslashtirilgan maktablariga tayyorlovchi
                        yetakchi o’quv markaz
                    </p>
                </div>
                <div class="site_map reveal">
                    <h4>Sayt xaritasi</h4>
                    <ul>
                        <li><a href="#about_qorakol">Biz haqimizda</a></li>
                        <li><a href="#why_qorakol">Nima uchun biz</a></li>
                        <li><a href="#sciences">Kurslar</a></li>
                        <li><a href="#teachers">O’qituvchilarimiz</a></li>
                    </ul>
                </div>
                <div class="filiallar reveal">
                    <h4>Filiallarimiz</h4>
                    <ul>
                        <li><a href="">Shahriston filiali</a></li>
                        <li><a href="">Chorsu filiali</a></li>
                        <li><a href="">Olmazor filiali</a></li>
                    </ul>
                </div>
                <div class="footer_contact reveal">
                    <h4>Kontaktlar</h4>
                    <a href="tel:+ 998 99 996 44 00">+ 998 99 996 44 00</a>
                    <div class="footer_tarmoqlar">
                        <h4>Ijtimoiy tarmoqlar</h4>
                        <div>
                            <img src="image/footer/telegram.svg" alt="" />
                            <img src="image/footer/instagram.svg" alt="" />
                            <img src="image/footer/youtube.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset("qorakol/js/teacherSwiper.js")}}"></script>
<script src="{{ asset("qorakol/js/modal.js")}}"></script>
<script src="{{ asset("qorakol/js/index.js")}}"></script>
<script src="{{ asset("qorakol/js/experiens.js")}}"></script>
<script src="{{ asset("qorakol/js/news.js")}}"></script>
<script src="{{ asset("qorakol/js/thoughts.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.7/inputmask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
</body>
</html>
