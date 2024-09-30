<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'image' => 'new-item-img.png',
                'title_uz' => "uz Quyosh panellari haqida 3ta fakt",
                'title_ru' => "ru Quyosh panellari haqida 3ta fakt",
                'description_uz' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'description_ru' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'status' => 1,
            ],
            [
                'image' => 'new-item-img.png',
                'title_uz' => "uz Quyosh panellari haqida 3ta fakt",
                'title_ru' => "ru Quyosh panellari haqida 3ta fakt",
                'description_uz' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'description_ru' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'status' => 1,
            ],
            [
                'image' => 'new-item-img.png',
                'title_uz' => "uz Quyosh panellari haqida 3ta fakt",
                'title_ru' => "ru Quyosh panellari haqida 3ta fakt",
                'description_uz' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'description_ru' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'status' => 1,
            ],
            [
                'image' => 'new-item-img.png',
                'title_uz' => "uz Quyosh panellari haqida 3ta fakt",
                'title_ru' => "ru Quyosh panellari haqida 3ta fakt",
                'description_uz' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'description_ru' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'status' => 1,
            ],
            [
                'image' => 'new-item-img.png',
                'title_uz' => "uz Quyosh panellari haqida 3ta fakt",
                'title_ru' => "ru Quyosh panellari haqida 3ta fakt",
                'description_uz' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'description_ru' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'status' => 1,
            ],
            [
                'image' => 'new-item-img.png',
                'title_uz' => "uz Quyosh panellari haqida 3ta fakt",
                'title_ru' => "ru Quyosh panellari haqida 3ta fakt",
                'description_uz' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'description_ru' => "☀️ Quyoshli o‘lkamiz uchun mos keladigan quyosh batareyalari haqida siz bilgan va bilmagan faktlarni e’tiboringizga havola etamiz.",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            News::create($data);
        }
    }
}
