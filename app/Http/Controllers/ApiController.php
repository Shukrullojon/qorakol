<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Comment;
use App\Models\Consultation;
use App\Models\Job;
use App\Models\News;
use App\Models\Partner;
use App\Models\Question;
use App\Models\Review;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getData()
    {
        $data = [
            'abouts' => About::where('status', 1)->get(),
            'comments' => Comment::where('status', 1)->get(),
            'consultations' => Consultation::where('status', 1)->get(),
            'jobs' => Job::with('files')->where('status', 1)->get(),
            'news' => News::with('files')->where('status', 1)->get(),
            'partners' => Partner::where('status', 1)->get(),
            'questions' => Question::where('status', 1)->get(),
            'reviews' => Review::where('status', 1)->get(),
            'works' => Work::where('status', 1)->get(),
        ];

        return response()->json($data);
    }

    public function sendMessage(Request $request)
    {
        $token = "7018480396:AAEWyViLNtIsr_R5ZQQiPGWTFDhSLZLCKZg";
        $text = "FIO: ".$request->name."\n";
        $text .= "PHONE: ".$request->phone."\n";
        Http::post('https://api.telegram.org/bot'.$token.'/sendMessage',[
            'chat_id' => -1002237430774,
            'text' => $text,
        ]);
        return response()->json([
            'status' => true
        ]);
    }
}
