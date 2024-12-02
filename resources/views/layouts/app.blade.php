<!doctype html>
<html lang="uz">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="Qorakol Ziyo">
    <meta property="og:description" content="Farzandingizni prezident maktablariga biz bilan tayyorlang">
    <meta property="og:image" content="https://qorakolziyo.uz/front/image/about qorakol/qorakol.png">
    <meta property="og:url" content="{{ url("/") }}">
    <meta property="og:type" content="website">

    <title>Qorakol Ziyo</title>
    <link rel="icon" href="{{ asset("front/image/logo.png")}}"/>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap"
        rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset("front/css/style.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/hero.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/p_maktab.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/about-qorakol.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/reyting.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/why_qorakol.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/partners.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/thoughts.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/sciences.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/tests.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/branch.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/experience.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/enroll.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/news.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/footer.css")}}"/>
    <link rel="stylesheet" href="{{ asset("front/css/loading.css")}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>

<header class="navbar" id="navbar">
    <nav class="container navigation">
        <div class="nav__logo">
            <div class="nav__logo__img reveal">
                <a href="">
                    <img src="{{ asset("front/image/navbar/vk_logo.svg")}}" alt=""/>
                </a>
            </div>
            <p class="nav__text reveal">
                Prezident va ixtisoslashtirilgan maktablariga tayyorlovchi o‘quv
                markaz
            </p>
        </div>
        <ul class="nav__list reveal">
            <li class="active_nav_list_link">
                <a class="reveal" href="#about_qorakol">Biz haqimizda</a>
            </li>
            <li class="active_nav_list_link">
                <a class="reveal" href="#sciences">Kurslar</a>
            </li>
            <li class="active_nav_list_link">
                <a class="reveal" href="#result">Natijalar</a>
            </li>
            <li class="active_nav_list_link">
                <a class="reveal" href="#filiallar">Filiallar</a>
            </li>
            <li class="active_nav_list_link">
                <a class="reveal" href="#enroll">Bog‘lanish</a>
            </li>
            <li class="navbar__contact_list reveal">
                <div class="nav__contact">
                    <a href="tel:+998999964400">+998 99 996 44 00</a>
                    <span>Biz bilan bog‘laning</span>
                </div>
            </li>
            <li class="nav__btn_list reveal">
                <button class="nav__btn btn nav_btn_modall">
                    Bepul konsultatsiya
                </button>
            </li>
        </ul>
        <div class="navbar__contact">
            <div class="nav__contact reveal">
                <a href="tel:+998999964400">+998 99 996 44 00</a>
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
                <form action="{{ route("notification") }}" method="POST">
                    @csrf
                    <input class="enroll_box_name nav_modal_inp_name" type="text" name="name" id="" placeholder="Ismingizni kiriting" required/>
                    <div class="enroll_box_phon phone-input reveal">
                        <img class="phone-flag" src="{{ asset("front/image/enroll/uzbekistan.svg")}}" alt=""/>
                        <label style="color: black" for="phoneInput">+998</label>
                        <input type="text" name="phone" id="phoneInput" placeholder="(__) ___-__-__"
                               oninput="maskPhoneInput(this)" required minlength="14" maxlength="14"/>
                    </div>
                    <button class="close_nav_modall">Yopish</button>
                    <button type="submit" name="submited" value="submited" class="enroll_box_btn">Jo'natish</button>
                </form>
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
                    <img class="reveal" src="{{ asset("front/image/footer/Qorakol logo.svg") }}" alt=""/>
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
                        @if(count($filials))
                            @foreach($filials as $filial)
                                <li><a href="">{{ $filial->name }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="footer_contact reveal">
                    <h4>Kontaktlar</h4>
                    <a href="tel:+ 998 99 996 44 00">+ 998 99 996 44 00</a>
                    <div class="footer_tarmoqlar">
                        <h4>Ijtimoiy tarmoqlar</h4>
                        <div>
                            <a href="https://t.me/qorakolziyo"><img src="{{ asset("front/image/footer/telegram.svg") }}" alt=""/></a>
                            <a href="https://www.instagram.com/qorakolziyo"><img src="{{ asset("front/image/footer/instagram.svg")}}" alt=""/></a>
                            <a href="https://www.youtube.com/@qorakolziyooquvmarkazi1029"><img src="{{ asset("front/image/footer/youtube.svg")}}" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset("front/js/modal.js")}}"></script>
<script src="{{ asset("front/js/index.js")}}"></script>
<script src="{{ asset("front/js/experiens.js")}}"></script>
<script src="{{ asset("front/js/partners.js")}}"></script>
<script src="{{ asset("front/js/news.js")}}"></script>
<script src="{{ asset("front/js/thoughts.js")}}"></script>
<script src="{{ asset("front/js/loading.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.7/inputmask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@if(Session::get('success'))
    <script>
        toastr.success("Siz bilan tez orada mutaxassislarimiz bog‘lanishadi!");
    </script>
@endif
<script>
    const back_questions = @json($questions);
    const additional = [
        // 11-savol: Ism
        {
            question: "Ismingiz?",
            inputType: "text",
            placeholder: "Ismingiz",
        },
        // 12-savol: Telefon
        {
            question: "Telefon raqamingiz?",
            inputType: "tel",
            placeholder: "+998991234567",
        },
        // 13-savol: Shahar
        {
            question: "Qaysi shaharda yashaysiz?",
            inputType: "select",
            options: ["Toshkent", "Samarqand", "Buxoro", "Andijon", "Farg'ona"],
        },
    ];
    const questions = [...back_questions, ...additional];
    const length = questions.length - 2;
    let currentQuestionIndex = 0;
    function showQuestion() {
        const quizQuestion = document.getElementById("quizQuestion");
        const stepCounter = document.getElementById("stepCounter");
        if (currentQuestionIndex < questions.length) {
            const questionData = questions[currentQuestionIndex];
            if (questionData.options) {
                const options = questionData.options
                    .map((option, index) => {
                        const isChecked =
                            questionData.selectedAnswer === option ? "checked" : "";
                        return `
                <div class='answers_row'>
                    <input type="radio" id="option${index}" name="quizOption" value="${option}" ${isChecked} />
                    <label for="option${index}">${option}</label>
                </div>`;
                    })
                    .join("");
                quizQuestion.innerHTML = `
                <p>${questionData.question}</p>
                ${options}
            `;
            } else {
                quizQuestion.innerHTML = `
                <input class='res_input' id="phoneInput"  type="${questionData.inputType}" placeholder="${questionData.placeholder}" required />
            `;
            }
            stepCounter.textContent = `${currentQuestionIndex + 1}/${
                questions.length
            }`;
        } else {
            quizQuestion.innerHTML =
                "<p>Tabriklaymiz! Siz testni muvaffaqiyatli yakunladingiz.</p>";
        }
    }
    document.querySelector(".nextBtn").addEventListener("click", function () {
        const selectedOption = document.querySelector(
            'input[name="quizOption"]:checked'
        );
        const currentQuestion = questions[currentQuestionIndex];
        const inputField = document.querySelector(".res_input");
        if (currentQuestionIndex < length && !selectedOption) {
            alert("Iltimos, javobni tanlang!");
            return;
        }
        // 1. Javob tanlanmagan bo'lsa yoki input bo'sh bo'lsa, xabar chiqadi
        if (currentQuestion.options && !selectedOption) {
            alert("Iltimos, javobni tanlang!");
            return;
        } else if (
            !currentQuestion.options &&
            inputField &&
            !inputField.value.trim()
        ) {
            alert("Iltimos, maydonni to'ldiring!");
            return;
        }
        // 2. Javob yoki qiymatni saqlash
        if (currentQuestion.options && selectedOption) {
            currentQuestion.selectedAnswer = selectedOption.value;
        } else if (!currentQuestion.options && inputField) {
            currentQuestion.answer = inputField.value.trim(); // Input maydoni qiymatini saqlash
        }
        if (selectedOption) {
            questions[currentQuestionIndex].selectedAnswer = selectedOption.value;
        }

        if (currentQuestionIndex < questions.length - 1) {
            currentQuestionIndex++;
            showQuestion();
        }
        // 3. Keyingi savolga o'tish yoki yakuniy xabarni ko'rsatish
        if (currentQuestionIndex < questions.length - 1) {
            showQuestion();
        } else {
            // Hamma savollarga javob berilganidan so'ng yakuniy xabarni ko'rsatish
            // send backend information
            console.log(questions);
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type:'POST',
                url:'{{ route('sendTestResult') }}',
                data:{
                    'result' : questions
                },
                success:function(data) {
                    console.log(data);
                }
            });
            document.getElementById("quizQuestion").innerHTML = `
            <p>Tabriklaymiz! Siz testni muvaffaqiyatli yakunladingiz.</p>
        `;
            document.querySelector(".nextBtn").style.display = "none";
            document.querySelector(".backBtn").style.display = "none";
        }

    });
    document.querySelector(".backBtn").addEventListener("click", function () {
        if (currentQuestionIndex > 0) {
            currentQuestionIndex--;
            showQuestion();
        }
    });
    showQuestion();
</script>
</body>
</html>
