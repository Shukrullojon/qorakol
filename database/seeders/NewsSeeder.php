<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => "Qorakol ziyo da 3-4 sinflar o'rtasida bepul olimpiada bolib otadi",
                'description' => "🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta o`quvchi taqdirlanadi. Ularga diplom, &quot;Yosh iqtidoregalari uchun&quot; kitoblari📚 va 400.000 so`mlik vaucherlarberiladi.",
                'image' => "2024_11_26_14_09_3246415.jpg",
                'status' => 1,
            ],
            [
                'title' => "Qorakol ziyo da 3-4 sinflar o'rtasida bepul olimpiada bolib otadi",
                'description' => "🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta o`quvchi taqdirlanadi. Ularga diplom, &quot;Yosh iqtidoregalari uchun&quot; kitoblari📚 va 400.000 so`mlik vaucherlarberiladi.",
                'image' => "2024_11_26_14_09_3246415.jpg",
                'status' => 1,
            ],
            [
                'title' => "Qorakol ziyo da 3-4 sinflar o'rtasida bepul olimpiada bolib otadi",
                'description' => "🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta o`quvchi taqdirlanadi. Ularga diplom, &quot;Yosh iqtidoregalari uchun&quot; kitoblari📚 va 400.000 so`mlik vaucherlarberiladi.",
                'image' => "2024_11_26_14_09_3246415.jpg",
                'status' => 1,
            ],
            [
                'title' => "Qorakol ziyo da 3-4 sinflar o'rtasida bepul olimpiada bolib otadi",
                'description' => "🥇Oltin medali bilan eng yuqori natijaga erishgan 5 ta o`quvchi taqdirlanadi. Ularga diplom, &quot;Yosh iqtidoregalari uchun&quot; kitoblari📚 va 400.000 so`mlik vaucherlarberiladi.",
                'image' => "2024_11_26_14_09_3246415.jpg",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            News::create($data);
        }
    }
}
