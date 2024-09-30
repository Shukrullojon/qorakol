<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title_uz' => "uz Saqlash muddati qancha ?",
                'title_ru'  => "ru Saqlash muddati qancha ?",
                'description_uz' => "uz telefon raqamingizni qoldiring",
                'description_ru' => "ru telefon raqamingizni qoldiring",
                'status' => 1,
            ],
            [
                'title_uz' => "uz Saqlash muddati qancha ?",
                'title_ru'  => "ru Saqlash muddati qancha ?",
                'description_uz' => "uz telefon raqamingizni qoldiring",
                'description_ru' => "ru telefon raqamingizni qoldiring",
                'status' => 1,
            ],
            [
                'title_uz' => "uz Saqlash muddati qancha ?",
                'title_ru'  => "ru Saqlash muddati qancha ?",
                'description_uz' => "uz telefon raqamingizni qoldiring",
                'description_ru' => "ru telefon raqamingizni qoldiring",
                'status' => 1,
            ],
            [
                'title_uz' => "uz Saqlash muddati qancha ?",
                'title_ru'  => "ru Saqlash muddati qancha ?",
                'description_uz' => "uz telefon raqamingizni qoldiring",
                'description_ru' => "ru telefon raqamingizni qoldiring",
                'status' => 1,
            ],
            [
                'title_uz' => "uz Saqlash muddati qancha ?",
                'title_ru'  => "ru Saqlash muddati qancha ?",
                'description_uz' => "uz telefon raqamingizni qoldiring",
                'description_ru' => "ru telefon raqamingizni qoldiring",
                'status' => 1,
            ],
            [
                'title_uz' => "uz Saqlash muddati qancha ?",
                'title_ru'  => "ru Saqlash muddati qancha ?",
                'description_uz' => "uz telefon raqamingizni qoldiring",
                'description_ru' => "ru telefon raqamingizni qoldiring",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Question::create($data);
        }
    }
}
