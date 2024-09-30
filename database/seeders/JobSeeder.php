<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'image' => "mb-white-icon.svg",
                'title_uz' => "Murad Buildings - 1000 uz",
                'title_ru' => "Murad Buildings - 1000 ru",
                "description_uz" => "Arif Solar, Arif International Holdingning energetika yo'nalishidagi sho' ba korxonasi xisoblanadi. Korxonamizning quyosh elektr stansiyalarini qurishuchun dunyoning eng sifatli barcha hom ashyo va mahsulotlarni olib kelish va o'rnatish bilan shug'ullanadi. Asosiy magsadlarimizdan biri O'zbekistonda gaytatiklanuvchi elektr energiya manbaylarini ko'paytirish orgali, tabiatga keltirilayotgan zararlarni kamaytirish! uz",
                "description_ru" => "Arif Solar, Arif International Holdingning energetika yo'nalishidagi sho' ba korxonasi xisoblanadi. Korxonamizning quyosh elektr stansiyalarini qurishuchun dunyoning eng sifatli barcha hom ashyo va mahsulotlarni olib kelish va o'rnatish bilan shug'ullanadi. Asosiy magsadlarimizdan biri O'zbekistonda gaytatiklanuvchi elektr energiya manbaylarini ko'paytirish orgali, tabiatga keltirilayotgan zararlarni kamaytirish! ru",
                'address_uz' => "Tashkent, Uzbekistan",
                'address_ru' => "Tashkent, Uzbekistan",
                'width' => 111,
                'height' => 85,
                'status' => 1,
            ],
            [
                'image' => "mb-white-icon.svg",
                'title_uz' => "Murad Buildings - 1000 uz",
                'title_ru' => "Murad Buildings - 1000 ru",
                "description_uz" => "Arif Solar, Arif International Holdingning energetika yo'nalishidagi sho' ba korxonasi xisoblanadi. Korxonamizning quyosh elektr stansiyalarini qurishuchun dunyoning eng sifatli barcha hom ashyo va mahsulotlarni olib kelish va o'rnatish bilan shug'ullanadi. Asosiy magsadlarimizdan biri O'zbekistonda gaytatiklanuvchi elektr energiya manbaylarini ko'paytirish orgali, tabiatga keltirilayotgan zararlarni kamaytirish! uz",
                "description_ru" => "Arif Solar, Arif International Holdingning energetika yo'nalishidagi sho' ba korxonasi xisoblanadi. Korxonamizning quyosh elektr stansiyalarini qurishuchun dunyoning eng sifatli barcha hom ashyo va mahsulotlarni olib kelish va o'rnatish bilan shug'ullanadi. Asosiy magsadlarimizdan biri O'zbekistonda gaytatiklanuvchi elektr energiya manbaylarini ko'paytirish orgali, tabiatga keltirilayotgan zararlarni kamaytirish! ru",
                'address_uz' => "Tashkent, Uzbekistan",
                'address_ru' => "Tashkent, Uzbekistan",
                'width' => 111,
                'height' => 85,
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Job::create($data);
        }
    }
}
