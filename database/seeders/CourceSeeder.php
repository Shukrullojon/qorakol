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
                "image" => "icon1.svg",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "icon2.svg",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "icon3.svg",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "icon4.svg",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "icon5.svg",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "icon6.svg",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "icon7.svg",
                "status" => 1,
            ],
            [
                "name" => "Matematika",
                "description" => "Matematikadan olimpiadaga tayyorlash kurslarimiz",
                "image" => "icon8.svg",
                "status" => 1,
            ],
        ];

        foreach ($datas as $data){
            Cource::create($data);
        }
    }
}
