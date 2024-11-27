<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'image' => "behance.png",
                'status' => 1,
            ],
            [
                'image' => "dribbble.png",
                'status' => 1,
            ],
            [
                'image' => "behance.png",
                'status' => 1,
            ],
            [
                'image' => "dribbble.png",
                'status' => 1,
            ],
            [
                'image' => "behance.png",
                'status' => 1,
            ],
            [
                'image' => "dribbble.png",
                'status' => 1,
            ],
            [
                'image' => "behance.png",
                'status' => 1,
            ],
            [
                'image' => "dribbble.png",
                'status' => 1,
            ],
            [
                'image' => "dribbble.png",
                'status' => 1,
            ],
            [
                'image' => "dribbble.png",
                'status' => 1,
            ],
            [
                'image' => "dribbble.png",
                'status' => 1,
            ],
            [
                'image' => "dribbble.png",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data) {
            Partner::create($data);
        }
    }
}
