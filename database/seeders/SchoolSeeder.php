<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => "Bepul ovqatlanish va yotoqxona",
                "image" => "talim.png",
            ],
            [
                "name" => "Maxsus tashriflar va kurslar",
                "image" => "talim.png",
            ],
            [
                "name" => "Xorijiy top universitetlarga kirish imkoniga ega bo‘ladi.",
                "image" => "talim.png",
            ],
            [
                "name" => "Kutubxona va Sport majmuasi",
                "image" => "talim.png",
            ],
            [
                "name" => "Zamonaviy texnika va labaratoriyalar",
                "image" => "talim.png",
            ],
            [
                "name" => "Barcha universitetlariga imtihonsiz kirish imkoniyati",
                "image" => "talim.png",
            ],
        ];
        foreach ($datas as $data) {
            School::create($data);
        }
    }
}
