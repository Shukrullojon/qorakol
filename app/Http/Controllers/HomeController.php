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
use App\Models\Work;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class HomeController extends Controller
{
    public function new(Request $request)
    {
        dd($request);
        $locale = $request->session()->get('locale');
        $locale = $locale ?: "uz";
        $about = About::select("video","image","title_$locale as title", "description_$locale as description")->where('status',1)->latest()->first();
        $works = Work::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $reviews = Review::select("video","name")->where('status',1)->latest()->get();
        $comments = Comment::select("comment_$locale as comment", "fio", "company")->where('status',1)->latest()->get();
        $news = News::select("image","title_$locale as title", "description_$locale as description","created_at")->where('status',1)->latest()->get();
        $partners = Partner::select("link")->where('status',1)->latest()->get();
        $questions = Question::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $jobs = Job::select("image","title_$locale as title", "description_$locale as description", "address_$locale as address","width","height","status")->where('status',1)->latest()->get();
        $consultations = Consultation::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $img = $locale == "uz" ? "lang_icon_uz.svg" : "lang-icon.svg";
        return view('new',[
            'about' => $about,
            'works' => $works,
            'reviews' => $reviews,
            'comments' => $comments,
            'news' => $news,
            'partners' => $partners,
            'questions' => $questions,
            'jobs' => $jobs,
            'consultations' => $consultations,
            'locale' => $locale,
            'img' => $img,
        ]);
    }

    public function index(Request $request)
    {
        $locale = $request->session()->get('locale');
        $locale = $locale ?: "uz";
        $about = About::select("video","image","title_$locale as title", "description_$locale as description")->where('status',1)->latest()->first();
        $works = Work::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $reviews = Review::select("video","name")->where('status',1)->latest()->get();
        $comments = Comment::select("comment_$locale as comment", "fio", "company")->where('status',1)->latest()->get();
        $news = News::select("image","title_$locale as title", "description_$locale as description","created_at")->where('status',1)->latest()->get();
        $partners = Partner::select("link")->where('status',1)->latest()->get();
        $questions = Question::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $jobs = Job::select("image","title_$locale as title", "description_$locale as description", "address_$locale as address","width","height","status")->where('status',1)->latest()->get();
        $consultations = Consultation::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        return view('home',[
            'about' => $about,
            'works' => $works,
            'reviews' => $reviews,
            'comments' => $comments,
            'news' => $news,
            'partners' => $partners,
            'questions' => $questions,
            'jobs' => $jobs,
            'consultations' => $consultations,
        ]);
    }

    public function main()
    {
        return view('home.index');
    }

    public function profile()
    {
        return view('profile');
    }
}
