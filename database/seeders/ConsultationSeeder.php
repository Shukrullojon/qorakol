<?php

namespace Database\Seeders;

use App\Models\Consultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title_uz' => "Butun o’zbekiston bo’ylab tarmoqlar uz",
                'title_ru' => "Butun o’zbekiston bo’ylab tarmoqlar ru",
                'description_uz' => "uz 🔆 O'zbekiston quyosh energiyasi bozorining joriy holati <br>🔍 2024-yilda kutayotgan eng yangi o'zgarishlar va tendentsiyalar <br>🚀 Energetika sohasidagi yangi proyektlar va investitsiyalar",
                'description_ru' => "ru 🔆 O'zbekiston quyosh energiyasi bozorining joriy holati <br>🔍 2024-yilda kutayotgan eng yangi o'zgarishlar va tendentsiyalar <br>🚀 Energetika sohasidagi yangi proyektlar va investitsiyalar",
                'status' => 1,
            ],
            [
                'title_uz' => "Butun o’zbekiston bo’ylab tarmoqlar uz",
                'title_ru' => "Butun o’zbekiston bo’ylab tarmoqlar ru",
                'description_uz' => "uz 🔆 O'zbekiston quyosh energiyasi bozorining joriy holati <br>🔍 2024-yilda kutayotgan eng yangi o'zgarishlar va tendentsiyalar <br>🚀 Energetika sohasidagi yangi proyektlar va investitsiyalar",
                'description_ru' => "ru 🔆 O'zbekiston quyosh energiyasi bozorining joriy holati <br>🔍 2024-yilda kutayotgan eng yangi o'zgarishlar va tendentsiyalar <br>🚀 Energetika sohasidagi yangi proyektlar va investitsiyalar",
                'status' => 1,
            ],
            [
                'title_uz' => "Butun o’zbekiston bo’ylab tarmoqlar uz",
                'title_ru' => "Butun o’zbekiston bo’ylab tarmoqlar ru",
                'description_uz' => "uz 🔆 O'zbekiston quyosh energiyasi bozorining joriy holati <br>🔍 2024-yilda kutayotgan eng yangi o'zgarishlar va tendentsiyalar <br>🚀 Energetika sohasidagi yangi proyektlar va investitsiyalar",
                'description_ru' => "ru 🔆 O'zbekiston quyosh energiyasi bozorining joriy holati <br>🔍 2024-yilda kutayotgan eng yangi o'zgarishlar va tendentsiyalar <br>🚀 Energetika sohasidagi yangi proyektlar va investitsiyalar",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Consultation::create($data);
        }
    }
}
