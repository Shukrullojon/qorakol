<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantage;
use App\Models\Ask;
use App\Models\Center;
use App\Models\Comment;
use App\Models\Consultation;
use App\Models\Cource;
use App\Models\Feadback;
use App\Models\Filial;
use App\Models\Job;
use App\Models\News;
use App\Models\Partner;
use App\Models\Question;
use App\Models\Review;
use App\Models\School;
use App\Models\Teacher;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Revolution\Google\Sheets\Facades\Sheets;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $schools = School::get();
        $center = Center::first();
        $advantages = Advantage::where('status',1)->get();
        $partners = Partner::where('status',1)->get();
        $feadbacks = Feadback::where('status',1)->get();
        $cources = Cource::where('status',1)->get();
        $filials = Filial::where('status',1)->get();
        $teachers = Teacher::where('status',1)->get();
        $asks = Ask::where('status',1)->get();
        $news = News::where('status',1)->get();

        return view('index',[
            'schools' => $schools,
            'center' => $center,
            'advantages' => $advantages,
            'partners' => $partners,
            'feadbacks' => $feadbacks,
            'cources' => $cources,
            'filials' => $filials,
            'teachers' => $teachers,
            'asks' => $asks,
            'news' => $news,
        ]);
    }

    public function notification(Request $request)
    {
        $text = "Fio: ".$request->name."\n";
        $text .= "Phone: ".$request->phone."\n";
        $token = (string)config("custom.bot_token");
        $group_id=config("custom.group_id");
        Http::get("https://api.telegram.org/bot7853306039:AAFxRgytHG4kcn1qZDmgpeyxLbu_UBjC9_0/sendMessage?chat_id=$group_id&text=$text");
        return redirect()->back()->with("success","hello");
    }

    public function sendTestResult(Request $request)
    {
        $correct = 0;
        $incorrect = 0;
        $text = "Test natijasi: "."\n\n";
        foreach ($request->result as $key => $value) {
            if (isset($value['options']) and isset($value['selectedAnswer'])) {
                $question = Question::checking($value['question'], $value['selectedAnswer']);
                $question ? $correct++ : $incorrect++;
            } else {
                if ($value['question'] == "Ismingiz?"){
                    $text .= "Ism: ".$value['answer'] ?? " noanswer";
                } else if($value['question'] == "Telefon raqamingiz?"){
                    $text .= "Telefon: ".$value['answer'] ?? " noanswer";
                } else if($value['question'] == "Qaysi shaharda yashaysiz?"){
                    $text .= "Shahar: "; $text .= $value['answer'] ?? " noanswer";
                } else {
                    $text .= $value['question'] ?? " noquestion";
                    $text .= " ";
                    $text .= $value['answer'] ?? " noanswer";
                }
                $text .= "\n";
            }
        }
        $text .= "correct: ".$correct."\n";
        $text .= "incorrect: ".$incorrect."\n";
        $group_id= config("custom.group_id");
        Http::get("https://api.telegram.org/bot7853306039:AAFxRgytHG4kcn1qZDmgpeyxLbu_UBjC9_0/sendMessage?chat_id=$group_id&text=$text");
        return response()->json([
            'status' => true,
            'message' => "Okey endi malumotlar bilan ishla",
        ]);
    }

    public function home()
    {
        return view('home.index');
    }

    public function profile()
    {
        return view('profile');
    }
}
