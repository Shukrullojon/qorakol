<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'comment_uz' => "uz Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'comment_ru' => "ru Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'fio' => "Asliddin Sharipov",
                'company' => "Tech Soft Direktori",
                'status' => 1,
            ],
            [
                'comment_uz' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'comment_ru' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'fio' => "Asliddin Sharipov",
                'company' => "Tech Soft Direktori",
                'status' => 1,
            ],
            [
                'comment_uz' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'comment_ru' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'fio' => "Asliddin Sharipov",
                'company' => "Tech Soft Direktori",
                'status' => 1,
            ],
            [
                'comment_uz' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'comment_ru' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'fio' => "Asliddin Sharipov",
                'company' => "Tech Soft Direktori",
                'status' => 1,
            ],
            [
                'comment_uz' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'comment_ru' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'fio' => "Asliddin Sharipov",
                'company' => "Tech Soft Direktori",
                'status' => 1,
            ],
            [
                'comment_uz' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'comment_ru' => "Arial Solar bilan uzoq yillardan beri ishlab kelamiz. Xizmat sifati ancha yuqori, malakali hodimlar jamosiga ega bu kompaniya bilan ishlashdan mamnunmiz. Xizmat sifati ancha yuqori.",
                'fio' => "Asliddin Sharipov",
                'company' => "Tech Soft Direktori",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Comment::create($data);
        }
    }
}
