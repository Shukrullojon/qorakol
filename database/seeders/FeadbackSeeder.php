<?php

namespace Database\Seeders;

use App\Models\Feadback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeadbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => "Lobar Sobirova",
                "description" => "Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga",
                "image"  => "Lobar.png",
                "link" => "https://www.youtube.com/embed/PhAdo6gn06c?si=iXjJ6fZMY0HbHdVK",
                "status" => 1,
            ],
            [
                "name" => "Lobar Sobirova",
                "description" => "Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga",
                "image"  => "Lobar.png",
                "link" => "https://www.youtube.com/embed/PhAdo6gn06c?si=iXjJ6fZMY0HbHdVK",
                "status" => 1,
            ],
            [
                "name" => "Lobar Sobirova",
                "description" => "Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga",
                "image"  => "Lobar.png",
                "link" => "https://www.youtube.com/embed/PhAdo6gn06c?si=iXjJ6fZMY0HbHdVK",
                "status" => 1,
            ],
            [
                "name" => "Lobar Sobirova",
                "description" => "Farzandim “Qorako’l Ziyo” o’quv markazida 9 oy davomida tayyorlandi va O’zbekiston Davlat Jahon tillari universiteti Filiologiya Ingliz tili yo’nalishi talabasiga",
                "image"  => "Lobar.png",
                "link" => "https://www.youtube.com/embed/PhAdo6gn06c?si=iXjJ6fZMY0HbHdVK",
                "status" => 1,
            ],
        ];
        foreach ($datas as $data) {
            Feadback::create($data);
        }
    }
}
