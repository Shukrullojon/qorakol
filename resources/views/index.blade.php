@extends('layouts.app')

@section('content')

    <main>
        <!-- Hero Start -->
        <section class="hero">
            <div class="container">
                <div class="hero_box">
                    <div class="hero_left">
                        <div class="hero_left_line_box reveal">
                            <div class="hero_left_line"></div>
                            <p>1-9 sinf bolalari uchun</p>
                        </div>
                        <h1 class="hero_title reveal">
                            Farzandingizni prezident maktablariga biz bilan tayyorlang
                        </h1>
                        <p class="hero_left_text reveal">
                            Har yili eng kamida 90% o‘quvchisi talaba bo’ladi.
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
                        <img src="{{ asset("qorakol/image/hero/Subtract.png")}}" alt="" />
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
                        <?php $i=1; $j=0 ?>
                        @foreach($schools as $school)
                            <div class="p_maktab_card reveal">
                                <div class="p_maktab_card_text">
                                    <p>{{ $school->name }}</p>
                                    <div class="p_maktab_card_icon">
                                        <img src="{{ asset("files/".$school->image )}}" alt="" />
                                    </div>
                                </div>
                                <span class="p_maktab_card_num">/{{ $j }}{{$i++}}</span>
                            </div>
                            <?php
                                if ($i > 9){
                                    $j="";
                                }
                            ?>
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
                        <a class="reveal" href="#">Farzandingiz kelajagi uchun to‘g‘ri tanlov qiling va biz bilan bog‘laning!</a>
                    </div>
                </div>
            </section>
        @endif
        <!-- P-Maktab End -->
        <!-- About Qorakol Start -->
        <section id="about_qorakol" class="section">
            <div class="about_qorakol">
                <div class="container">
                    <h2 class="qorakol_title p_maktab_title reveal">
                        QORAKO'L ZIYO O'QUV MARKAZI HAQIDA
                    </h2>
                    <div class="qorakol">
                        <!-- Left Content -->
                        <div class="left_content">
                            <p class="reveal">
                                <strong>"Qorako'l Ziyo"</strong> Respublikamizda, har qanday
                                statistika bo'yicha eng ko'p medal-u diplomlar 🏅🥇 olib
                                kelgan o'quv markazi hisoblanadi.
                            </p>
                            <br />
                            <p class="reveal">
                                Asosiy diqqatimiz farzandingizni Prezident, Al-Xorazmiy, Mirzo
                                Ulug'bek va Ixtisoslashgan maktablarga tayyorlashga
                                qaratilgan.
                            </p>
                            <br />
                            <p class="reveal">
                                O'quv markazimiz Toshkent shahrida o'z faoliyatini 2012-yilda
                                boshlagan, hozirda <strong>3 ta</strong> filiali mavjud.
                                Filiallarimiz <strong>Chorsu</strong>,
                                <strong>Olmazor</strong> va
                                <strong>Shahristonda</strong> mavjud. Bizning o'quv markazda
                                Matematika, Ona tili | Adabiyot, Ingliz tili Fizika Tarix va
                                Huquq fanlari IT kurslarimiz ham bor.
                            </p>
                            <br />
                            <p class="reveal">
                                Darslarni <strong>5, 10</strong> va <strong>15</strong> yillik
                                tajribaga ega. Jahon va Respublika Olimpiada g'oliblari
                                bo'lgan ustozlar o'qitadi. Maqsadingizga
                                <strong>"Qorako'l Ziyo"</strong> da ilm olish bilan erishing!
                            </p>
                            <br /><br />
                            <div class="qorakol_btn_students">
                                <a href="#enroll">
                                    <button class="btn qorakol_btn reveal">
                                        Sinov darsiga yozilish
                                    </button>
                                </a>
                                <div class="qorakol_students_size reveal">
                                    <div class="qorakol_students">
                                        <div class="qorakol_students_img1">
                                            <img src="{{ asset("qorakol/image/about qorakol/tudent1.svg")}}" alt="" />
                                        </div>
                                        <div class="qorakol_students_img2">
                                            <img src="{{ asset("qorakol/image/about qorakol/student2.svg")}}" alt="" />
                                        </div>
                                        <div class="qorakol_students_img3">
                                            <img src="{{ asset("qorakol/image/about qorakol/student3.svg")}}" alt="" />
                                        </div>
                                    </div>
                                    <p class="stats">
                                        Hozirda
                                        <strong class="studet_size">4750+</strong> o'quvchi tahsil
                                        olmoqda
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Image and Button -->
                        <div class="right_content reveal">
                            <div class="right_content_img">
                                <img src="{{ asset("qorakol/image/about qorakol/qorakol.png")}}" alt="" />
                            </div>
                            <div class="right_content_btn">
                                <button class="open_iframe">
                                    <img src="{{ asset("qorakol/image/about qorakol/btn_play.svg")}}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="vido_iframe">
                            <buttom class="iframe_close">
                                <img src="{{ asset("qorakol/image/news/plus.svg")}}" alt="" />
                            </buttom>
                            <iframe
                                src="https://www.youtube.com/embed/PhAdo6gn06c?si=iXjJ6fZMY0HbHdVK"
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

        <!-- About Qorakol End -->
        <!-- Reyting Start -->
        <section class="section">
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

        <section id="why_qorakol" class="section why_qorakol">
            <div class="container">
                <h2 class="p_maktab_title why_qorakol_title reveal">
                    Nima uchun Farzandingiz “<span>Qorako‘l ziyo</span>” da o‘qishi
                    kerak?
                </h2>
                <div class="why_qorakol_box">
                    <div class="why_qorakol_card reveal">
                        <div class="why_qorakol_icon_card">
                            <div class="why_qorakol_icon1">
                                <img class="why__qorakol_icon" src="{{ asset("qorakol/image/why_qorakol/icon1.svg")}}" alt="Experience Icon"/>
                            </div>
                        </div>
                        <h3 class="why_qorakol_card_title">KO'P YILLIK TAJRIBA</h3>
                        <p class="why_qorakol_cart_text">
                            <strong>"Qorako'l Ziyo"</strong> o'quv markazi Toshkent shahrida
                            <strong>2012-yildan</strong> beri uzluksiz ravishda o'z
                            faoliyatini davom ettirib kelmoqda.
                        </p>
                    </div>

                    <div class="why_qorakol_card reveal">
                        <div class="why_qorakol_icon_card">
                            <div class="why_qorakol_icon2">
                                <img class="why__qorakol_icon" src="{{ asset("qorakol/image/why_qorakol/icon2.svg")}}" alt="Teachers Icon"
                                />
                            </div>
                        </div>
                        <h3 class="why_qorakol_card_title">TAJRIBALI USTOZLAR</h3>
                        <p class="why_qorakol_cart_text">
                            Bizda haqiqiy professionallar Jahon va Respublika olimpiadasi
                            sovrindorlari 🏅 dars beradi. Ustozlarni ta’lim metodikasi
                            orqali
                            <strong>farzandingiz qolganlardan o’zib ketadi.</strong>
                        </p>
                    </div>

                    <div class="why_qorakol_card reveal">
                        <div class="why_qorakol_icon_card">
                            <div class="why_qorakol_icon3">
                                <img class="why__qorakol_icon" src="{{ asset("qorakol/image/why_qorakol/icon3.svg")}}" alt="Results Icon"/>
                            </div>
                        </div>
                        <h3 class="why_qorakol_card_title">
                            IXTISOSLAShGAN MAKTA BLARDAGI NATIJA
                        </h3>
                        <p class="why_qorakol_cart_text">
                            O’quv markazimizdan <strong>12 nafar </strong> Al-Xorazmiy ,
                            <strong>10 nafar</strong> Prizdent maktablari,
                            <strong>7 nafari</strong> esa Mirzo Ulug’bek maktabiga bundan
                            tashqari <strong>50 dan oshiq</strong> o’quvchi ixtisoslashgan
                            maktablarga qabul qilindi.
                        </p>
                    </div>

                    <div class="why_qorakol_card reveal">
                        <div class="why_qorakol_icon_card">
                            <div class="why_qorakol_icon4">
                                <img class="why__qorakol_icon" src="{{ asset("qorakol/image/why_qorakol/icon4.svg")}}" alt="Program Icon"/>
                            </div>
                        </div>
                        <h3 class="why_qorakol_card_title">
                            MAXSUS ISHLAB CHIQILGAN O'QUV DASTURI
                        </h3>
                        <p class="why_qorakol_cart_text">
                            Darslarda o’quv markazimiz tomonidan maxsus ishlab chiqilgan
                            <strong>IDC o’quv qo’llanmalar</strong> asosida o’tiladi.
                        </p>
                    </div>

                    <div class="why_qorakol_card reveal">
                        <div class="why_qorakol_icon_card">
                            <div class="why_qorakol_icon5">
                                <img class="why__qorakol_icon" src="{{ asset("qorakol/image/why_qorakol/icon5.svg")}}" alt="Success Icon"/>
                            </div>
                        </div>
                        <h3 class="why_qorakol_card_title">BIZNING NATIJALARIMIZ</h3>
                        <p class="why_qorakol_cart_text">
                            Markazimizda hozirgacha <strong>14000 dan ortiq bolalar</strong>
                            ta’lim olishgan. Ko’plab oq’uvchilarimiz Prizdent va
                            ixtisoslashtirilgan maktablarga
                            <strong>muvaffaqiyatli kirishgan.</strong>
                        </p>
                    </div>

                    <div class="why_qorakol_card reveal">
                        <div class="why_qorakol_icon_card">
                            <div class="why_qorakol_icon6">
                                <img class="why__qorakol_icon" src="{{ asset("qorakol/image/why_qorakol/icon6.svg")}}" alt="Branches Icon"/>
                            </div>
                        </div>
                        <h3 class="why_qorakol_card_title">SHAHAR BO'YLAB 3TA FILIAL</h3>
                        <p class="why_qorakol_cart_text">
                            Hozirgi vaqtda Toshkent shahrida
                            <strong>3 ta filialimiz</strong> bor. Chorsu, Olmazor va
                            Shahristonda mavjud.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Qorakol End   -->

        <!-- Partners Start -->

        <section class="section">
            <div class="container">
                <h2 class="p_maktab_title partners_title reveal">
                    Biz bilan birga ishlaydigan <span>Hamkorlarimiz</span>
                </h2>
                <div class="partners_box">
                    <div class="marquee">
                        <div class="partners">
                            <div class="partners_card reveal">
                                <img src="{{ asset("qorakol/image/partners/Behance-Logo.png")}}" alt="" />
                            </div>
                            <div class="partners_card reveal">
                                <img
                                    src="https://www.cdnlogo.com/logos/c/41/craft.svg"
                                    alt=""
                                />
                            </div>
                            <div class="partners_card reveal">
                                <img src="{{ asset("qorakol/image/partners/Dribbble-Logo.png")}}" alt="" />
                            </div>
                            <div class="partners_card reveal">
                                <img src="{{ asset("qorakol/image/partners/Google_2015_logo.svg.webp")}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners End -->

        <!-- Thoughts Start -->

        <section class="section">
            <div class="container">
                <h2 class="thoughts_title p_maktab_title reveal">
                    <span>markaz haqida fikrlar</span>ni o‘quvchilarimiz va ularning
                    ota-onasidan eshitamiz
                </h2>
                <div class="swiper thoughts_swiper">
                    <div class="thoughts-wrapper">
                        <ul class="card-list swiper-wrapper">
                            <li class="thoughts_card_item swiper-slide reveal">
                                <div class="thoughts_card_item_img_box">
                                    <div class="img_thoughts_rel">
                                        <div>
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="Lobar Sobirova"/>
                                        </div>
                                        <div class="right_content_btn">
                                            <button class="open_iframe">
                                                <img
                                                    src="image/about qorakol/btn_play.svg"
                                                    alt="Play button"
                                                />
                                            </button>
                                        </div>
                                    </div>
                                    <h5 class="thoughts_card_title">Lobar Sobirova</h5>
                                    <p
                                        class="thoughts_card_text"
                                        title="Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga aylandi."
                                    >
                                        Farzandim <strong>“Qorako’l Ziyo”</strong> o’quv markazida
                                        <strong>9 oy</strong> davomida tayyorlandi va O’zbekiston
                                        Davlat Jahon tillari universiteti Filiologiya Ingliz tili
                                        yo’nalishi talabasiga aylandi.
                                    </p>
                                </div>
                            </li>
                            <li class="thoughts_card_item swiper-slide reveal">
                                <div class="thoughts_card_item_img_box">
                                    <div class="img_thoughts_rel">
                                        <div>
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="Lobar Sobirova"/>
                                        </div>
                                        <div class="right_content_btn">
                                            <button class="open_iframe">
                                                <img src="{{ asset("qorakol/image/about qorakol/btn_play.svg")}}" alt="Play button"/>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 class="thoughts_card_title">Lobar Sobirova</h5>
                                    <p
                                        class="thoughts_card_text"
                                        title="Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga aylandi."
                                    >
                                        Farzandim <strong>“Qorako’l Ziyo”</strong> o’quv markazida
                                        <strong>9 oy</strong> davomida tayyorlandi va O’zbekiston
                                        Davlat Jahon tillari universiteti Filiologiya Ingliz tili
                                        yo’nalishi talabasiga aylandi.
                                    </p>
                                </div>
                            </li>
                            <li class="thoughts_card_item swiper-slide reveal">
                                <div class="thoughts_card_item_img_box">
                                    <div class="img_thoughts_rel">
                                        <div>
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="Lobar Sobirova"/>
                                        </div>
                                        <div class="right_content_btn">
                                            <button class="open_iframe">
                                                <img src="{{ asset("qorakol/image/about qorakol/btn_play.svg")}}" alt="Play button"/>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 class="thoughts_card_title">Lobar Sobirova</h5>
                                    <p class="thoughts_card_text" title="Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga aylandi.">
                                        Farzandim <strong>“Qorako’l Ziyo”</strong> o’quv markazida
                                        <strong>9 oy</strong> davomida tayyorlandi va O’zbekiston
                                        Davlat Jahon tillari universiteti Filiologiya Ingliz tili
                                        yo’nalishi talabasiga aylandi.
                                    </p>
                                </div>
                            </li>
                            <li class="thoughts_card_item swiper-slide reveal">
                                <div class="thoughts_card_item_img_box">
                                    <div class="img_thoughts_rel">
                                        <div>
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="Lobar Sobirova"/>
                                        </div>
                                        <div class="right_content_btn">
                                            <button class="open_iframe">
                                                <img src="{{ asset("qorakol/image/about qorakol/btn_play.svg")}}" alt="Play button"/>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 class="thoughts_card_title">Lobar Sobirova</h5>
                                    <p
                                        class="thoughts_card_text"
                                        title="Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga aylandi."
                                    >
                                        Farzandim <strong>“Qorako’l Ziyo”</strong> o’quv markazida
                                        <strong>9 oy</strong> davomida tayyorlandi va O’zbekiston
                                        Davlat Jahon tillari universiteti Filiologiya Ingliz tili
                                        yo’nalishi talabasiga aylandi.
                                    </p>
                                </div>
                            </li>
                            <li class="thoughts_card_item swiper-slide reveal">
                                <div class="thoughts_card_item_img_box">
                                    <div class="img_thoughts_rel">
                                        <div>
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="Lobar Sobirova"/>
                                        </div>
                                        <div class="right_content_btn">
                                            <button class="open_iframe">
                                                <img src="{{ asset("qorakol/image/about qorakol/btn_play.svg")}}" alt="Play button"/>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 class="thoughts_card_title">Lobar Sobirova</h5>
                                    <p
                                        class="thoughts_card_text"
                                        title="Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga aylandi."
                                    >
                                        Farzandim <strong>“Qorako’l Ziyo”</strong> o’quv markazida
                                        <strong>9 oy</strong> davomida tayyorlandi va O’zbekiston
                                        Davlat Jahon tillari universiteti Filiologiya Ingliz tili
                                        yo’nalishi talabasiga aylandi.
                                    </p>
                                </div>
                            </li>
                            <li class="thoughts_card_item swiper-slide reveal">
                                <div class="thoughts_card_item_img_box">
                                    <div class="img_thoughts_rel">
                                        <div>
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="Lobar Sobirova"/>
                                        </div>
                                        <div class="right_content_btn">
                                            <button class="open_iframe">
                                                <img src="{{ asset("qorakol/image/about qorakol/btn_play.svg")}}" alt="Play button"/>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 class="thoughts_card_title">Lobar Sobirova</h5>
                                    <p
                                        class="thoughts_card_text"
                                        title="Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga aylandi."
                                    >
                                        Farzandim <strong>“Qorako’l Ziyo”</strong> o’quv markazida
                                        <strong>9 oy</strong> davomida tayyorlandi va O’zbekiston
                                        Davlat Jahon tillari universiteti Filiologiya Ingliz tili
                                        yo’nalishi talabasiga aylandi.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="vido_iframe">
                <buttom class="iframe_close">
                    <img src="{{ asset("qorakol/image/news/plus.svg")}}" alt="" />
                </buttom>
                <iframe
                    width="860"
                    height="515"
                    src="https://www.youtube.com/embed/PhAdo6gn06c?si=iXjJ6fZMY0HbHdVK"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                ></iframe>
            </div>
        </section>
        <!-- Thoughts End -->

        <!-- Sciences Start -->

        <section id="sciences" class="section sciences">
            <div class="container">
                <h2 class="p_maktab_title sciences_title reveal">
                    O‘quv markazimizdagi mavjud <span>kurslar</span>
                </h2>
                <div class="sciences_cards">
                    <div class="sciences_card reveal">
                        <div class="sciences_card_top">
                            <h5 class="sciences_card_title">Matematika</h5>
                            <div class="sciences_card_icons sciences_card_icons1">
                                <img src="{{ asset("qorakol/image/sciences/icon1.svg")}}" alt="" />
                            </div>
                        </div>
                        <div class="sciences_card_bottom">
                            <p class="sciences_card_bottom_text">
                                Matematikadan olimpiadaga tayyorlash kurslarimiz
                            </p>
                        </div>
                    </div>
                    <div class="sciences_card reveal">
                        <div class="sciences_card_top">
                            <h5 class="sciences_card_title">Matematika</h5>
                            <div class="sciences_card_icons sciences_card_icons2">
                                <img src="{{ asset("qorakol/image/sciences/icon2.svg")}}" alt="" />
                            </div>
                        </div>
                        <div class="sciences_card_bottom">
                            <p class="sciences_card_bottom_text">
                                Matematikadan olimpiadaga tayyorlash kurslarimiz
                            </p>
                        </div>
                    </div>
                    <div class="sciences_card reveal">
                        <div class="sciences_card_top">
                            <h5 class="sciences_card_title">Matematika</h5>
                            <div class="sciences_card_icons sciences_card_icons3">
                                <img src="{{ asset("qorakol/image/sciences/icon3.svg")}}" alt="" />
                            </div>
                        </div>
                        <div class="sciences_card_bottom">
                            <p class="sciences_card_bottom_text">
                                Matematikadan olimpiadaga tayyorlash kurslarimiz
                            </p>
                        </div>
                    </div>
                    <div class="sciences_card reveal">
                        <div class="sciences_card_top">
                            <h5 class="sciences_card_title">Matematika</h5>
                            <div class="sciences_card_icons sciences_card_icons4">
                                <img src="{{ asset("qorakol/image/sciences/icon4.svg")}}" alt="" />
                            </div>
                        </div>
                        <div class="sciences_card_bottom">
                            <p class="sciences_card_bottom_text">
                                Matematikadan olimpiadaga tayyorlash kurslarimiz
                            </p>
                        </div>
                    </div>
                    <div class="sciences_card reveal">
                        <div class="sciences_card_top">
                            <h5 class="sciences_card_title">Matematika</h5>
                            <div class="sciences_card_icons sciences_card_icons5">
                                <img src="{{ asset("qorakol/image/sciences/icon5.svg")}}" alt="" />
                            </div>
                        </div>
                        <div class="sciences_card_bottom">
                            <p class="sciences_card_bottom_text">
                                Matematikadan olimpiadaga tayyorlash kurslarimiz
                            </p>
                        </div>
                    </div>
                    <div class="sciences_card reveal">
                        <div class="sciences_card_top">
                            <h5 class="sciences_card_title">Matematika</h5>
                            <div class="sciences_card_icons sciences_card_icons6">
                                <img src="{{ asset("qorakol/image/sciences/icon6.svg")}}" alt="" />
                            </div>
                        </div>
                        <div class="sciences_card_bottom">
                            <p class="sciences_card_bottom_text">
                                Matematikadan olimpiadaga tayyorlash kurslarimiz
                            </p>
                        </div>
                    </div>
                    <div class="sciences_card reveal">
                        <div class="sciences_card_top">
                            <h5 class="sciences_card_title">Matematika</h5>
                            <div class="sciences_card_icons sciences_card_icons7">
                                <img src="{{ asset("qorakol/image/sciences/icon7.svg")}}" alt="" />
                            </div>
                        </div>
                        <div class="sciences_card_bottom">
                            <p class="sciences_card_bottom_text">
                                Matematikadan olimpiadaga tayyorlash kurslarimiz
                            </p>
                        </div>
                    </div>
                    <div class="sciences_card reveal">
                        <div class="sciences_card_top">
                            <h5 class="sciences_card_title">Matematika</h5>
                            <div class="sciences_card_icons sciences_card_icons8">
                                <img src="{{ asset("qorakol/image/sciences/icon8.svg")}}" alt="" />
                            </div>
                        </div>
                        <div class="sciences_card_bottom">
                            <p class="sciences_card_bottom_text">
                                Matematikadan olimpiadaga tayyorlash kurslarimiz
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

        <section id="filiallar" class="section">
            <div class="container">
                <h2 class="p_maktab_title branch_title reveal">
                    O‘quv markazimiz <span>filiallari</span>
                </h2>
                <div class="branch">
                    <div class="branch_card reveal">
                        <div class="branch_img">
                            <img src="{{ asset("qorakol/image/branch/branchs.png")}}" alt="" />
                            <div class="branch_location">
                                <a href="#" class="branch_location_google">
                                    <img src="{{ asset("qorakol/image/branch/google.svg")}}" alt="" />
                                </a>
                                <a href="#" class="branch_location_yandex">
                                    <img src="{{ asset("qorakol/image/branch/yandex.svg")}}" alt="" />
                                </a>
                            </div>
                        </div>
                        <h3 class="branch_card_title">Yunusobod filiali</h3>
                        <p class="branch_text">
                            Toshkent shahar, Yunusobod tumani Shahriston metro, Anor Plaza,
                            3-qavat
                        </p>
                        <div class="branch_card_btn">
                            <button class="btn branc_btn">Filialni tanlash</button>
                        </div>
                    </div>
                    <div class="branch_card reveal">
                        <div class="branch_img">
                            <img src="{{ asset("qorakol/image/branch/branchs.png")}}" alt="" />
                            <div class="branch_location">
                                <a href="#" class="branch_location_google">
                                    <img src="{{ asset("qorakol/image/branch/google.svg")}}" alt="" />
                                </a>
                                <a href="#" class="branch_location_yandex">
                                    <img src="{{ asset("qorakol/image/branch/yandex.svg")}}" alt="" />
                                </a>
                            </div>
                        </div>
                        <h3 class="branch_card_title">olmazor filiali</h3>
                        <p class="branch_text">
                            Toshkent shahar, Yunusobod tumani Shahriston metro, Anor Plaza,
                            3-qavat
                        </p>
                        <div class="branch_card_btn">
                            <button class="btn branc_btn">Filialni tanlash</button>
                        </div>
                    </div>
                    <div class="branch_card reveal">
                        <div class="branch_img">
                            <img src="{{ asset("qorakol/image/branch/branchs.png")}}" alt="" />
                            <div class="branch_location">
                                <a href="#" class="branch_location_google">
                                    <img src="{{ asset("qorakol/image/branch/google.svg")}}" alt="" />
                                </a>
                                <a href="#" class="branch_location_yandex">
                                    <img src="{{ asset("qorakol/image/branch/yandex.svg")}}" alt="" />
                                </a>
                            </div>
                        </div>
                        <h3 class="branch_card_title">Chorsu filiali</h3>
                        <p class="branch_text">
                            Toshkent shahar, Yunusobod tumani Shahriston metro, Anor Plaza,
                            3-qavat
                        </p>
                        <div class="branch_card_btn">
                            <button class="btn branc_btn">Filialni tanlash</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Branch End -->

        <!-- Experience  Start -->

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
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="experience_card swiper-slide">
                                        <div class="experience_card_img">
                                            <div class="experience_card_img_b_a">
                                                <img
                                                    src="https://ingame.ee/wp-content/uploads/2023/02/NTS08941-1200x800.jpg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="experience_size_border">
                                                <div class="experience_size">
                                                    <span>Tajriba</span>
                                                    <p>15 yil</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="experience_teacher_name">Ro’ziyev baxtiyor</h6>
                                        <p class="experience_teacher_science">
                                            Matematika fani o’qituvchisi
                                        </p>
                                    </div>
                                </li>
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="experience_card swiper-slide">
                                        <div class="experience_card_img">
                                            <div class="experience_card_img_b_a">
                                                <img
                                                    src="https://ingame.ee/wp-content/uploads/2023/02/NTS08941-1200x800.jpg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="experience_size_border">
                                                <div class="experience_size">
                                                    <span>Tajriba</span>
                                                    <p>15 yil</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="experience_teacher_name">Ro’ziyev baxtiyor</h6>
                                        <p class="experience_teacher_science">
                                            Matematika fani o’qituvchisi
                                        </p>
                                    </div>
                                </li>
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="experience_card swiper-slide">
                                        <div class="experience_card_img">
                                            <div class="experience_card_img_b_a">
                                                <img
                                                    src="https://ingame.ee/wp-content/uploads/2023/02/NTS08941-1200x800.jpg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="experience_size_border">
                                                <div class="experience_size">
                                                    <span>Tajriba</span>
                                                    <p>15 yil</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="experience_teacher_name">Ro’ziyev baxtiyor</h6>
                                        <p class="experience_teacher_science">
                                            Matematika fani o’qituvchisi
                                        </p>
                                    </div>
                                </li>
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="experience_card swiper-slide">
                                        <div class="experience_card_img">
                                            <div class="experience_card_img_b_a">
                                                <img
                                                    src="https://ingame.ee/wp-content/uploads/2023/02/NTS08941-1200x800.jpg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="experience_size_border">
                                                <div class="experience_size">
                                                    <span>Tajriba</span>
                                                    <p>15 yil</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="experience_teacher_name">Ro’ziyev baxtiyor</h6>
                                        <p class="experience_teacher_science">
                                            Matematika fani o’qituvchisi
                                        </p>
                                    </div>
                                </li>
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="experience_card swiper-slide">
                                        <div class="experience_card_img">
                                            <div class="experience_card_img_b_a">
                                                <img
                                                    src="https://ingame.ee/wp-content/uploads/2023/02/NTS08941-1200x800.jpg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="experience_size_border">
                                                <div class="experience_size">
                                                    <span>Tajriba</span>
                                                    <p>15 yil</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="experience_teacher_name">Ro’ziyev baxtiyor</h6>
                                        <p class="experience_teacher_science">
                                            Matematika fani o’qituvchisi
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <!-- Pagination -->
                        </div>
                    </div>
                    <!-- Linking SwiperJS script -->
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                    <!-- Linking custom script -->
                    <script src="script.js"></script>

                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </section>

        <!-- Experience  End -->

        <!-- Enroll in a Class Start -->

        <section id="enroll" class="section enroll">
            <div class="container">
                <div class="enroll_box">
                    <h2 class="p_maktab_title enroll_title reveal">
                        Bepul sinov testiga yoziling va bizda o‘qish imkoniyatiga ega
                        bo‘ling. Farzandingizga fikrlashni o‘rgatamiz.
                    </h2>
                    <div class="enroll_box_respons">
                        <input class="enroll_box_name reveal" type="text" name="" id="" placeholder="Ismingizni kiriting"/>
                        <div class="enroll_box_phon phone-input reveal">
                            <img class="phone-flag" src="{{ asset("qorakol/image/enroll/uzbekistan.svg")}}" alt=""/>
                            <label style="color: black" for="">+998</label>
                            <input
                                type="tel"
                                onkeydown="phoneNumberFormatter()"
                                id="phoneInput"
                                placeholder="(__)___-__-__"
                            />
                        </div>
                        <button class="enroll_box_btn reveal">
                            Bepul darsga yozilish
                        </button>
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
                        <div class="question_answers reveal">
                            <div class="btn-plyus">
                                <p>Necha yoshdan qabul qilasizlar?</p>
                                <button class="savollar_btn">
                                    <img src="{{ asset("qorakol/image/news/plus.svg")}}" alt="" />
                                </button>
                            </div>
                            <p class="answer">Biz 18 yoshdan qabul qilamiz.</p>
                        </div>

                        <div class="question_answers reveal">
                            <div class="btn-plyus">
                                <p>Narxi qancha?</p>
                                <button class="savollar_btn">
                                    <img src="{{ asset("qorakol/image/news/plus.svg")}}" alt="" />
                                </button>
                            </div>
                            <div class="answer">Narxi 500 000 so'm.</div>
                        </div>

                        <div class="question_answers reveal">
                            <div class="btn-plyus">
                                <p>Qaysi fanlardan o’qitasizlar?</p>
                                <button class="savollar_btn">
                                    <img src="{{ asset("qorakol/image/news/plus.svg")}}" alt="" />
                                </button>
                            </div>
                            <div class="answer">
                                <p>Matematika, Fizika va Ingliz tili.</p>
                            </div>
                        </div>

                        <div class="question_answers reveal">
                            <div class="btn-plyus">
                                <p>Markaz haqida to’liq ma’lumot bera olasizmi?</p>
                                <button class="savollar_btn">
                                    <img src="{{ asset("qorakol/image/news/plus.svg")}}" alt="" />
                                </button>
                            </div>
                            <div class="answer">
                                <p>Matematika, Fizika va Ingliz tili.</p>
                            </div>
                        </div>

                        <div class="question_answers reveal">
                            <div class="btn-plyus">
                                <p>Qo’shimcha qanday bonuslar bor?</p>
                                <button class="savollar_btn">
                                    <img src="{{ asset("qorakol/image/news/plus.svg")}}" alt="" />
                                </button>
                            </div>
                            <div class="answer">
                                <p>Matematika, Fizika va Ingliz tili.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container swiper">
                        <div class="news_card-wrapper">
                            <!-- Card slides container -->
                            <ul class="card-list swiper-wrapper">
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="news_card swiper-slide">
                                        <div class="news_card_img">
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="" />
                                        </div>
                                        <h5 class="news_card_title">
                                            "Qorako'l Ziyo" da 3-4-sinflar o'rtasida bepul olimpiada
                                            bo'lib o'tadi.
                                        </h5>
                                        <p
                                            class="news_card_text"
                                            title='🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                      o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                      egalari uchun" kitoblari📚 va 400.000 so`mlik vaucherlar
                      beriladi.'
                                        >
                                            🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                                            o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                                            egalari uchun" kitoblari📚 va 400.000 so'mlik vaucherlar
                                            beriladi.
                                        </p>
                                    </div>
                                </li>
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="news_card swiper-slide">
                                        <div class="news_card_img">
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="" />
                                        </div>
                                        <h5 class="news_card_title">
                                            "Qorako'l Ziyo" da 3-4-sinflar o'rtasida bepul olimpiada
                                            bo'lib o'tadi.
                                        </h5>
                                        <p
                                            class="news_card_text"
                                            title='🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                      o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                      egalari uchun" kitoblari📚 va 400.000 so`mlik vaucherlar
                      beriladi.'
                                        >
                                            🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                                            o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                                            egalari uchun" kitoblari📚 va 400.000 so'mlik vaucherlar
                                            beriladi.
                                        </p>
                                    </div>
                                </li>
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="news_card swiper-slide">
                                        <div class="news_card_img">
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="" />
                                        </div>
                                        <h5 class="news_card_title">
                                            "Qorako'l Ziyo" da 3-4-sinflar o'rtasida bepul olimpiada
                                            bo'lib o'tadi.
                                        </h5>
                                        <p
                                            class="news_card_text"
                                            title='🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                      o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                      egalari uchun" kitoblari📚 va 400.000 so`mlik vaucherlar
                      beriladi.'
                                        >
                                            🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                                            o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                                            egalari uchun" kitoblari📚 va 400.000 so'mlik vaucherlar
                                            beriladi.
                                        </p>
                                    </div>
                                </li>
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="news_card swiper-slide">
                                        <div class="news_card_img">
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="" />
                                        </div>
                                        <h5 class="news_card_title">
                                            "Qorako'l Ziyo" da 3-4-sinflar o'rtasida bepul olimpiada
                                            bo'lib o'tadi.
                                        </h5>
                                        <p
                                            class="news_card_text"
                                            title='🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                      o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                      egalari uchun" kitoblari📚 va 400.000 so`mlik vaucherlar
                      beriladi.'
                                        >
                                            🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                                            o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                                            egalari uchun" kitoblari📚 va 400.000 so'mlik vaucherlar
                                            beriladi.
                                        </p>
                                    </div>
                                </li>
                                <li class="card-item swiper-slide reveal reveal">
                                    <div class="news_card swiper-slide">
                                        <div class="news_card_img">
                                            <img src="{{ asset("qorakol/image/thoughts/Lobar Sobirova.png")}}" alt="" />
                                        </div>
                                        <h5 class="news_card_title">
                                            "Qorako'l Ziyo" da 3-4-sinflar o'rtasida bepul olimpiada
                                            bo'lib o'tadi.
                                        </h5>
                                        <p
                                            class="news_card_text"
                                            title='🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                      o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                      egalari uchun" kitoblari📚 va 400.000 so`mlik vaucherlar
                      beriladi.'
                                        >
                                            🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta
                                            o`quvchi taqdirlanadi. Ularga diplom, "Yosh iqtidor
                                            egalari uchun" kitoblari📚 va 400.000 so'mlik vaucherlar
                                            beriladi.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
