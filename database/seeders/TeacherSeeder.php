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
                "image" => "2024_11_26_14_09_3246415.jpg",
                "status" => 1,
            ],
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_11_26_14_09_3246415.jpg",
                "status" => 1,
            ],
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_11_26_14_09_3246415.jpg",
                "status" => 1,
            ],
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_11_26_14_09_3246415.jpg",
                "status" => 1,
            ],
            [
                "name" => "RO'ZIYEV BAXTIYOR",
                "info" => "Matematika fani o'qituvchisi",
                "experence" => "15 yil",
                "image" => "2024_11_26_14_09_3246415.jpg",
                "status" => 1,
            ],
        ];
        foreach ($datas as $data) {
            Teacher::create($data);
        }
    }
}
