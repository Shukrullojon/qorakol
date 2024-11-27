<?php

namespace Database\Seeders;

use App\Models\Center;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'text' => "Asosiy diqqatimiz farzandingizni Prezident, Al-Xorazmiy, Mirzo Ulug'bek va Ixtisoslashgan maktablarga tayyorlashga qaratilgan.
O'quv markazimiz Toshkent shahrida o'z faoliyatini 2012-yilda boshlagan, hozirda 3 ta filiali mavjud. Filiallarimiz Chorsu, Olmazor va Shahristonda mavjud. Bizning o'quv markazda Matematika, Ona tili | Adabiyot, Ingliz tili Fizika Tarix va Huquq fanlari IT kurslarimiz ham bor.
Darslarni 5, 10 va 15 yillik tajribaga ega. Jahon va Respublika Olimpiada g'oliblari bo'lgan ustozlar o'qitadi. Maqsadingizga \"Qorako'l Ziyo\" da ilm olish bilan erishing!",
            'link' => "https://www.youtube.com/embed/PhAdo6gn06c?si=iXjJ6fZMY0HbHdVK",
            'student_count' => "4750",
        ];
        Center::create($data);
    }
}
