// Navbar scroll Start

const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.style.padding = '18px 0';
    } else {
        navbar.style.padding = '30px 0';
    }
});


// Navbar scroll End

const questions = [
    {
        question: "Hovlida tovuqlar va qo'ylar bor edi. Ularning 3 boshi va 8 oyog'i bor. Qancha tovuq va nechta qo'y?",
        options: ["1 tovuq va 1 qo'y", "3 tovuq va 1 qo'y", "4 tovuq va 2 qo'y", "2 tovuq va 1 qo'y"]
    },
    {
        question: "Bozorda 5 olma va 7 nok bor edi. Olmalar soni noklardan necha marta kam?",
        options: ["2 marta", "3 marta", "1 marta", "5 marta"]
    },
    {
        question: "Bir qozonda 6 ta baliq va 3 ta qovurilgan baliq bor edi. Qancha baliq hali pishirilmagan?",
        options: ["3 ta", "6 ta", "4 ta", "2 ta"]
    },
    {
        question: "Uchburchakning ikki tomoni 5 sm va 7 sm. Uchburchakning uchinchi tomoni necha sm bo'lishi mumkin?",
        options: ["11 sm", "6 sm", "3 sm", "5 sm"]
    },
    {
        question: "Bir odam 6 km masofani 1 soatda bosib o'tadi. U 3 soatda qancha masofa yura oladi?",
        options: ["12 km", "18 km", "15 km", "24 km"]
    },
    {
        question: "Agar x + 3 = 10 bo'lsa, x ning qiymati nima?",
        options: ["7", "5", "3", "10"]
    },
    {
        question: "Bir teskari mayda toshning og'irligi 4 kg. Bunday toshdan 3 ta bor. Ularning umumiy og'irligi qancha?",
        options: ["12 kg", "8 kg", "10 kg", "6 kg"]
    },
    {
        question: "Bir anor 2 so'm turadi. 5 anor uchun qancha to'lanishi kerak?",
        options: ["10 so'm", "8 so'm", "15 so'm", "5 so'm"]
    },
    {
        question: "Bir kishi 4 ta xonadonni 2 haftada quradi. 8 ta xonadonni necha haftada quradi?",
        options: ["4 hafta", "6 hafta", "2 hafta", "8 hafta"]
    },
    {
        question: "Bir kishi 10 kg olma 8 kg nok to'pladi. Ularning umumiy og'irligi qancha?",
        options: ["18 kg", "20 kg", "16 kg", "15 kg"]
    },
    // 11-savol: Ism
    {
        question: "Ismingiz?",
        inputType: "text",
        placeholder: "Ismingiz"
    },
    // 12-savol: Telefon
    {
        question: "Telefon raqamingiz?",
        inputType: "tel",
        placeholder: "+998 99-999-9999"
    },
    // 13-savol: Shahar
    {
        question: "Qaysi shaharda yashaysiz?",
        inputType: "select",
        options: ["Toshkent", "Samarqand", "Buxoro", "Andijon", "Farg'ona"]
    },
];

let currentQuestionIndex = 0;

function showQuestion() {
    const quizQuestion = document.getElementById("quizQuestion");
    const stepCounter = document.getElementById("stepCounter");

    if (currentQuestionIndex < questions.length) {
        const questionData = questions[currentQuestionIndex];

        if (questionData.options) {
            const options = questionData.options.map(
                (option, index) => `
                <div class='answers_row'>
                    <input type="radio" id="option${index}" name="quizOption" value="${option}" required />
                    <label for="option${index}">${option}</label>
                </div>`
            ).join('');
            quizQuestion.innerHTML = `
                <p>${questionData.question}</p>
                ${options}
            `;
        } else {
            quizQuestion.innerHTML = `
                <input class='res_input' type="${questionData.inputType}" placeholder="${questionData.placeholder}" required />
            `;
        }
        stepCounter.textContent = `${currentQuestionIndex + 1}/${questions.length}`;
    } else {
        quizQuestion.innerHTML = "<p>Tabriklaymiz! Siz testni muvaffaqiyatli yakunladingiz.</p>";
    }
}

document.querySelector(".nextBtn").addEventListener("click", function () {
    const selectedOption = document.querySelector('input[name="quizOption"]:checked');
    if (currentQuestionIndex < 10 && !selectedOption) {
        alert("Iltimos, javobni tanlang!");
        if (currentQuestionIndex < questions.length) {
            currentQuestionIndex++;
            showQuestion();
        }
    }
});

document.querySelector(".backBtn").addEventListener("click", function () {
    if (currentQuestionIndex > 0) {
        currentQuestionIndex--;
        showQuestion();
    }
});

showQuestion();




// -------------------------------

