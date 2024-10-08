<?php

namespace Database\Seeders;

use App\Models\Ask;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => "Necha yoshdan qabul qilasizlar?",
                'description' => "Biz 18 yoshdan qabul qilamiz.",
                'status' => 1,
            ],
            [
                'title' => "Necha yoshdan qabul qilasizlar?",
                'description' => "Biz 18 yoshdan qabul qilamiz.",
                'status' => 1,
            ],
            [
                'title' => "Necha yoshdan qabul qilasizlar?",
                'description' => "Biz 18 yoshdan qabul qilamiz.",
                'status' => 1,
            ],
            [
                'title' => "Necha yoshdan qabul qilasizlar?",
                'description' => "Biz 18 yoshdan qabul qilamiz.",
                'status' => 1,
            ],
            [
                'title' => "Necha yoshdan qabul qilasizlar?",
                'description' => "Biz 18 yoshdan qabul qilamiz.",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data) {
            Ask::create($data);
        }
    }
}
