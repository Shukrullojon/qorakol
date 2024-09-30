<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title_uz' => '10+ YIL',
                'title_ru' => 'Bozorda',
                'description_uz' => '10+ YIL uz',
                'description_ru' => 'Bozorda ru',
                'status' => 1,
            ],
            [
                'title_uz' => '10+ YIL',
                'title_ru' => 'Bozorda',
                'description_uz' => '10+ YIL uz',
                'description_ru' => 'Bozorda ru',
                'status' => 1,
            ],
            [
                'title_uz' => '10+ YIL',
                'title_ru' => 'Bozorda',
                'description_uz' => '10+ YIL uz',
                'description_ru' => 'Bozorda ru',
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Work::create($data);
        }
    }
}
