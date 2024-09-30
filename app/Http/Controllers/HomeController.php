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

    public function index(Request $request)
    {
        return view('index',[

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
