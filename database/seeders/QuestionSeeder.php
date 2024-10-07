<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Question::create([
                "question" => Str::random(10),
                "answer_1" => Str::random(10),
                "answer_2" => Str::random(10),
                "answer_3" => Str::random(10),
                "answer_4" => Str::random(10),
                "correct_answer" => rand(1, 4),
                "status" => 1,
            ]);
        }
    }
}
