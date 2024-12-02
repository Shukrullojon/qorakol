@extends('layouts.app')

@section('content')
    <!-- Loading start -->
    <div class="spinner-container">
        <div class="spinner"></div>
    </div>
    <!-- Loading end -->

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero_box">
                    <div class="hero_left">
                        <div class="hero_left_line_box reveal">
                            <div class="hero_left_line"></div>
                            <p>1-9 sinf bolalari uchun</p>
                        </div>
                        <h1 class="hero_title reveal">
                            FARZANDINGIZNI PREZIDENT MAKTABIGA VA UNIVERSITETLARGA BIZ BILAN TAYYORLANG
                        </h1>
                        <p class="hero_left_text reveal">
                            2024-yili 95% abituriyentlarimiz talaba bo'lishdi
                        </p>
                        <div class="hero_left_btn reveal">
                            <a href="#enroll">
                                <button class="btn hero_btn">
                                    Birinchi darsga Bepul yozilish
                                </button>
                            </a>
                            <div class="hero_left_aloqa">
                                <a href="tel:+99899999964400">Hoziroq qo‘ng‘iroq qiling</a>
                            </div>
                        </div>
                    </div>
                    <div class="hero_reight reveal">
                        <div class="hero_reight_img_content"></div>
                        <img src="{{ asset("front/image/hero/Subtract.png")}}" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero End -->
        <!-- P-Maktab Start -->
        @if(count($schools))
            <section class="section p_maktab">
                <div class="container">
                    <h2 class="p_maktab_title reveal">
                        Nima uchun farzandingiz <span>prizdent maktabi</span>da o‘qish
                        kerak?
                    </h2>
                    <p class="p_maktab_text reveal">
                        Prizdent maktabi - ushbu maktabga barcha Ota-onalar farzandlarini
                        o‘qitishni xoxlashlari shubxasiz.
                    </p>
                    <div class="p_maktab_box">
                        <?php $cnt = 1 ?>
                        @foreach($schools as $school)
                            <div class="p_maktab_card reveal">
                                <div class="p_maktab_card_text">
                                    <p>{{ $school->name }}</p>
                                    <div class="p_maktab_card_icon p_maktab_card_icon1">
                                        <img src="{{ asset("files/".$school->image) }}" alt="" />
                                    </div>
                                </div>
                                <span class="p_maktab_card_num">/0{{ $cnt++ }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="p_maktab_btns">
                        <div>
                            <a href="#enroll">
                                <button class="btn p_maktab_btn reveal">
                                    Bepul maslahat olish
                                </button>
                            </a>
                        </div>
                        <br />
                        <a class="reveal" href="">Farzandingiz kelajagi uchun to‘g‘ri tanlov qiling va biz bilan
                            bog‘laning!</a
                        >
                    </div>
                </div>
            </section>
        @endif
        <!-- P-Maktab End -->

        <!-- About Qorakol Start -->
        @if(!empty($center))
        <section id="about_qorakol" class="section">
            <div class="about_qorakol">
                <div class="container">
                    <h2 class="qorakol_title p_maktab_title reveal">
                        QORAKO'L ZIYO O'QUV MARKAZI HAQIDA
                    </h2>
                    <div class="qorakol">
                        <!-- Left Content -->
                        <div class="left_content">
                            {{ $center->text }}
                            <div class="qorakol_btn_students">
                                <a href="#enroll">
                                    <button class="btn qorakol_btn reveal">
                                        Sinov darsiga yozilish
                                    </button>
                                </a>
                                <div class="qorakol_students_size reveal">
                                    <div class="qorakol_students">
                                        <div class="qorakol_students_img1">
                                            <img src="{{ asset("front/image/about qorakol/tudent1.svg") }}" alt="" />
                                        </div>
                                        <div class="qorakol_students_img2">
                                            <img src="{{ asset("front/image/about qorakol/student2.svg")}}" alt="" />
                                        </div>
                                        <div class="qorakol_students_img3">
                                            <img src="{{ asset("front/image/about qorakol/student3.svg")}}" alt="" />
                                        </div>
                                    </div>
                                    <p class="stats">
                                        Hozirda
                                        <strong class="studet_size">{{ $center->student_count }}+</strong> o'quvchi tahsil
                                        olmoqda
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Image and Button -->
                        <div class="right_content reveal">
                            <div class="right_content_img">
                                <img src="{{ asset("front/image/about qorakol/qorakol.png")}}" alt="" />
                            </div>
                            <div class="right_content_btn">
                                <button class="open_iframe">
                                    <img src="{{ asset("front/image/about qorakol/btn_play.svg")}}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="vido_iframe">
                            <buttom class="iframe_close">
                                <img src="{{ asset("front/image/news/plus.svg")}}" alt="" />
                            </buttom>
                            <iframe
                                src="{{ $center->link }}"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- About Qorakol End -->

        <!-- Reyting Start -->

        <section id="result" class="section">
            <div class="grid_background">
                <div class="container">
                    <div class="reyting">
                        <div class="reyting_card reveal">
                            <h3>+90 %</h3>
                            <p>O‘quvchilarimiz ixtisoslashgan maktablarga kirishadi</p>
                        </div>
                        <div class="reyting_card reveal">
                            <h3>12+ yil</h3>
                            <p>O‘quv markazimizning ta'lim tajribasi</p>
                        </div>
                        <div class="reyting_card reveal">
                            <h3>98 %</h3>
                            <p>Abituriyentlarimiz har yili talabalikka tavsiya etiladi</p>
                        </div>
                        <div class="reyting_card reveal">
                            <h3>3 o’rin</h3>
                            <p>Ustozlarimizning xalqaro olimpiadada olgan o’rinlari</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reyting End -->

        <!-- Why Qorakol Start  -->
        @if(count($advantages))
            <section id="why_qorakol" class="section why_qorakol">
                <div class="container">
                    <h2 class="p_maktab_title why_qorakol_title reveal">
                        Nima uchun Farzandingiz “<span>Qorako‘l ziyo</span>” da o‘qishi
                        kerak?
                    </h2>
                    <div class="why_qorakol_box">
                        @foreach($advantages as $advantage)
                            <div class="why_qorakol_card reveal">
                                <div class="why_qorakol_icon_card">
                                    <div class="why_qorakol_icon1">
                                        <img class="why__qorakol_icon" src="{{ asset("files/".$advantage->image) }}" alt="Experience Icon"/>
                                    </div>
                                </div>
                                <h3 class="why_qorakol_card_title">{{ $advantage->title }}</h3>
                                <p class="why_qorakol_cart_text">
                                    {{ $advantage->description }}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
        @endif

        <!-- Why Qorakol End   -->

        <!-- Partners Start -->
        @if(count($partners))
            <section class="section">
                <div class="container">
                    <h2 class="p_maktab_title partners_title reveal">
                        Biz bilan birga ishlaydigan <span>Hamkorlarimiz</span>
                    </h2>
                    <div class="partners_box">
                        <div class="marquee">
                            <div class="partners">
                                @foreach($partners as $partner)
                                    <div class="partners_card reveal">
                                        <img src="{{ asset("files/".$partner->image) }}" alt="" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!-- Partners End -->

        <!-- Thoughts Start -->
        @if(count($feadbacks))
            <section class="section">
                <div class="container">
                    <h2 class="thoughts_title p_maktab_title reveal">
                        <span>markaz haqida fikrlar</span>ni o‘quvchilarimiz va ularning
                        ota-onasidan eshitamiz
                    </h2>
                    <div class="swiper thoughts_swiper">
                        <div class="thoughts-wrapper">
                            <ul class="card-list swiper-wrapper">
                                @foreach($feadbacks as $feadback)
                                    <li class="thoughts_card_item swiper-slide reveal">
                                    <div class="thoughts_card_item_img_box">
                                        <div class="img_thoughts_rel">
                                            <div>
                                                <img src="{{ asset("files/".$feadback->image) }}" alt="Lobar Sobirova"/>
                                            </div>
                                            <div class="right_content_btn">
                                                <button class="open_iframe">
                                                    <img src="{{ asset("front/image/about qorakol/btn_play.svg") }}" alt="Play button"/>
                                                </button>
                                            </div>
                                        </div>
                                        <h5 class="thoughts_card_title">{{ $feadback->name }}</h5>
                                        <p class="thoughts_card_text" title="{{ $feadback->description }}">
                                            {{ $feadback->description }}
                                        </p>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="vido_iframe">
                    <buttom class="iframe_close">
                        <img src="{{ assert("front/image/news/plus.svg") }}" alt="" />
                    </buttom>
                    <iframe
                        width="860"
                        height="515"
                        src="{{ $feadback->link }}"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                    ></iframe>
                </div>
            </section>
        @endif
        <!-- Thoughts End -->

        <!-- Sciences Start -->

        @if(count($cources))
            <section id="sciences" class="section sciences">
                <div class="container">
                    <h2 class="p_maktab_title sciences_title reveal">
                        O‘quv markazimizdagi mavjud <span>kurslar</span>
                    </h2>
                    <div class="sciences_cards">
                        @foreach($cources as $cource)
                            <div class="sciences_card reveal">
                                <div class="sciences_card_top">
                                    <h5 class="sciences_card_title">{{ $cource->name }}</h5>
                                    <div class="sciences_card_icons sciences_card_icons1">
                                        <img src="{{ asset("files/".$cource->image) }}" alt="" />
                                    </div>
                                </div>
                                <div class="sciences_card_bottom">
                                    <p class="sciences_card_bottom_text">
                                        {{ $cource->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- Sciences End -->

        <!-- Tests Start -->

        <section class="section tests">
            <div class="container">
                <div class="tests_card reveal">
                    <div class="tests_card_top">
                        <p class="tests_csrd_top_text reveal">
                            Prezident maktabiga kirish ehtimolini bilish uchun testdan
                            o’ting
                        </p>
                        <p class="tests_card_top_num" id="stepCounter">1/10</p>
                    </div>
                    <div class="tests_card_bottom reveal">
                        <div class="question" id="quizQuestion"></div>
                        <div class="tests_card_bottom_btns">
                            <button id="backBtn" class="tests_card_bottom_btn1 backBtn">
                                Orqaga
                            </button>
                            <button id="nextBtn" class="tests_card_bottom_btn2 nextBtn">
                                Oldinga
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tests End -->

        <!-- Branch Start -->

        @if(count($filials))
            <section id="filiallar" class="section">
                <div class="container">
                    <h2 class="p_maktab_title branch_title reveal">
                        O‘quv markazimiz <span>filiallari</span>
                    </h2>
                    <div class="branch">
                        @foreach($filials as $filial)
                            <div class="branch_card reveal">
                                <div class="branch_img">
                                    <img src="{{ asset("files/".$filial->image) }}" alt="" />
                                    <div class="branch_location">
                                        <a href="{{ $filial->google }}" class="branch_location_google">
                                            <img src="{{ asset("front/image/branch/google.svg") }}" alt="" />
                                        </a>
                                        <a href="{{ $filial->yandex }}" class="branch_location_yandex">
                                            <img src="{{ asset("front/image/branch/yandex.svg")}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <h3 class="branch_card_title">{{ $filial->name }}</h3>
                                <p class="branch_text">
                                    {{ $filial->info }}
                                </p>
                                <div class="branch_card_btn">
                                    <button class="btn branc_btn">Filialni tanlash</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- Branch End -->

        <!-- Experience  Start -->

        @if(count($teachers))
            <section id="teachers" class="section">
                <div class="container">
                    <div class="experience">
                        <h2 class="p_maktab_title experience_title reveal reveal">
                            Darslarni <span>5</span>,<span>10</span>,<span
                            >15 yillik tajriba</span
                            >
                            ega jahon va respublika olimpiadasi sovrindorlari o‘tishadi
                        </h2>
                        <div class="swiper">
                            <div class="teacher_card-wrapper">
                                <!-- Card slides container -->
                                <ul class="card-list swiper-wrapper">
                                    @foreach($teachers as $teacher)
                                        <li class="card-item swiper-slide reveal reveal">
                                            <div class="experience_card swiper-slide">
                                                <div class="experience_card_img">
                                                    <div class="experience_card_img_b_a">
                                                        <img src="{{ asset("files/".$teacher->image) }}" alt=""/>
                                                    </div>
                                                    <div class="experience_size_border">
                                                        <div class="experience_size">
                                                            <span>Tajriba</span>
                                                            <p>{{ $teacher->experence }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="experience_teacher_name">{{ $teacher->name }}</h6>
                                                <p class="experience_teacher_science">
                                                    {{ $teacher->info }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <!-- Pagination -->
                            </div>
                        </div>
                        <!-- Linking SwiperJS script -->
                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                        <!-- Linking custom script -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Experience End -->
        <!-- Enroll in a Class Start -->

        <section id="enroll" class="section enroll">
            <div class="container">
                <div class="enroll_box">
                    <h2 class="p_maktab_title enroll_title reveal">
                        Bepul sinov testiga yoziling va bizda o‘qish imkoniyatiga ega
                        bo‘ling. Farzandingizga fikrlashni o‘rgatamiz.
                    </h2>
                    <div>
                        <form action="{{ route("notification") }}" method="POST" class="enroll_box_respons">
                            @csrf
                            <input class="enroll_box_name reveal" type="text" name="name" id="" placeholder="Ismingizni kiriting"/>
                            <div class="enroll_box_phon phone-input reveal">
                                <img class="phone-flag" src="{{ asset("front/image/enroll/uzbekistan.svg") }}" alt=""/>
                                <label style="color: black" for="phoneInput">+998</label>
                                <input type="text" name="phone" id="phoneInput" placeholder="(__) ___-__-__" oninput="maskPhoneInput(this)" maxlength="14"/>
                            </div>
                            <button class="enroll_box_btn reveal" type="submit">
                                Bepul darsga yozilish
                            </button>
                        </form>
                    </div>
                    <p class="enroll_operator reveal">
                        Siz bilan tez orada bizning mutaxassislarimiz bog’lanishadi
                    </p>
                </div>
            </div>
        </section>

        <!-- Enroll in a Class End -->

        <!-- News Start -->

        <section class="section">
            <div class="container">
                <h2 class="p_maktab_title news_title reveal">
                    Tez-Tez so’raladigan <span>savollar</span> va So‘nggi
                    <span>yangiliklar</span>
                </h2>
                <div class="questions_news">
                    <div class="questions">
                        @foreach($asks as $ask)
                            <div class="question_answers reveal">
                                <div class="btn-plyus">
                                    <p>{{ $ask->title }}</p>
                                    <button class="savollar_btn">
                                        <img src="{{ asset("front/image/news/plus.svg") }}" alt="" />
                                    </button>
                                </div>
                                <p class="answer">{{ $ask->description }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="container swiper">
                        <div class="news_card-wrapper">
                            <!-- Card slides container -->
                            <ul class="card-list swiper-wrapper">
                                @foreach($news as $new)
                                    <li class="card-item swiper-slide reveal reveal">
                                        <div class="news_card swiper-slide">
                                            <div class="news_card_img">
                                                <img src="{{ asset("files/".$new->image) }}" alt="" />
                                            </div>
                                            <h5 class="news_card_title">
                                                {{ $new->title }}
                                            </h5>
                                            <p
                                                class="news_card_text"
                                                title="{{ $new->description }}">
                                                {{ $new->description }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News End -->
    </main>

@endsection
