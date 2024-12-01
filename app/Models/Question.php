<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $guarded = [];

    static $statuses = [
        1 => "Active ✅",
        0 => "Arxive ❌",
    ];

    static $answers = [
        1 => "A",
        2 => "B",
        3 => "C",
        4 => "D",
    ];

    public static function checking($question, $answer)
    {
        $question = self::where('question',$question)->first();
        $correct = false;
        if ($question->answer_1 == $answer and $question->correct_answer == 1) {
            $correct = true;
        } else if ($question->answer_2 == $answer and $question->correct_answer == 2) {
            $correct = true;
        } else if ($question->answer_3 == $answer and $question->correct_answer == 3) {
            $correct = true;
        } else if ($question->answer_4 == $answer and $question->correct_answer == 4) {
            $correct = true;
        }
        return $correct;
    }

}
