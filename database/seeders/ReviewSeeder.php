<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova 1',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova 2',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova 3',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova 4',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova 5',
                'status' => 1,
            ],
            [
                'video' => 'video.mp4',
                'name' => 'Aziza Usmonova 6',
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Review::create($data);
        }
    }
}
