<?php

namespace Database\Seeders;

use App\Models\Filial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilialSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => "YUNUSOBOD FILIALI",
                "info" => "Toshkent shahar, Yunusobod tumani Shahriston metro, Anor Plaza, 3-qavat",
                "google" => "google.com",
                "yandex" => "yandex.com",
                "image" => "talim.png",
                "status" => 1,
            ],
            [
                "name" => "OLMAZOR FILIALI",
                "info" => "Toshkent shahar, Yunusobod tumani Shahriston metro, Anor Plaza, 3-qavat",
                "google" => "google.com",
                "yandex" => "yandex.com",
                "image" => "talim.png",
                "status" => 1,
            ],
            [
                "name" => "CHORSU FILIALI",
                "info" => "Toshkent shahar, Yunusobod tumani Shahriston metro, Anor Plaza, 3-qavat",
                "google" => "google.com",
                "yandex" => "yandex.com",
                "image" => "talim.png",
                "status" => 1,
            ],
        ];
        foreach ($datas as $data) {
            Filial::create($data);
        }
    }
}
