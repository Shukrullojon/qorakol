<?php

namespace Database\Seeders;

use App\Models\Cource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "Google_2015_logo.svg.webp",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "Google_2015_logo.svg.webp",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "Google_2015_logo.svg.webp",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "Google_2015_logo.svg.webp",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "Google_2015_logo.svg.webp",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "Google_2015_logo.svg.webp",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "Google_2015_logo.svg.webp",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "Google_2015_logo.svg.webp",
                "status" => 1,
            ],
        ];

        foreach ($datas as $data){
            Cource::create($data);
        }
    }
}
