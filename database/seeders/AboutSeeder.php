<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'video' => 'video.mp4',
            'image' => 'play.svg',
            'title_uz' => 'Arif Solar, Arif International Holdingning energetika yo\'nalishidagi sho\' ba korxonasi xisoblanadi. uz',
            'title_ru' => 'Arif Solar, Arif International Holdingning energetika yo\'nalishidagi sho\' ba korxonasi xisoblanadi. ru',
            'description_uz' => 'Korxonamizning quyosh elektr stansiyalarini qurishuchun dunyoning eng sifatli barcha hom ashyo va mahsulotlarni olib kelish va o\'rnatish bilan shug\'ullanadi. Asosiy magsadlarimizdan biri O\'zbekistonda gaytatiklanuvchi elektr energiya manbaylarini ko\'paytirish orgali, tabiatga keltirilayotgan zararlarni kamaytirish!2024-yil oldimizga oldingi yilda erishgan narsalarimizdan o\'rnak olib yanada ko\'proq natijalarga erishishdir! uz',
            'description_ru' => 'Korxonamizning quyosh elektr stansiyalarini qurishuchun dunyoning eng sifatli barcha hom ashyo va mahsulotlarni olib kelish va o\'rnatish bilan shug\'ullanadi. Asosiy magsadlarimizdan biri O\'zbekistonda gaytatiklanuvchi elektr energiya manbaylarini ko\'paytirish orgali, tabiatga keltirilayotgan zararlarni kamaytirish!2024-yil oldimizga oldingi yilda erishgan narsalarimizdan o\'rnak olib yanada ko\'proq natijalarga erishishdir! ru',
            'status' => 1
        ]);
    }
}
