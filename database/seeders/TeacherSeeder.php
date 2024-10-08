<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_10_04_07_30_2988538.jpg",
                "status" => 1,
            ],
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_10_04_07_30_2988538.jpg",
                "status" => 1,
            ],
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_10_04_07_30_2988538.jpg",
                "status" => 1,
            ],
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_10_04_07_30_2988538.jpg",
                "status" => 1,
            ],
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_10_04_07_30_2988538.jpg",
                "status" => 1,
            ],
        ];
        foreach ($datas as $data) {
            Teacher::create($data);
        }
    }
}
