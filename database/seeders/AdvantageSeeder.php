<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => "SHAHAR BO'YLAB 3TA FILIAL",
                'description' => "Hozirgi vaqtda Toshkent shahrida 3 ta filialimiz bor. Chorsu, Olmazor va Shahristonda mavjud.",
                'image' => "talim.png",
                'status' => 1,
            ],
            [
                'title' => "BIZNING NATIJALARIMIZ",
                'description' => "Markazimizda hozirgacha 14000 dan ortiq bolalar ta’lim olishgan. Ko’plab oq’uvchilarimiz Prizdent va ixtisoslashtirilgan maktablarga muvaffaqiyatli kirishgan.",
                'image' => "talim.png",
                'status' => 1,
            ],
            [
                'title' => "MAXSUS ISHLAB CHIQILGAN O'QUV DASTURI",
                'description' => "Darslarda o’quv markazimiz tomonidan maxsus ishlab chiqilgan IDC o’quv qo’llanmalar asosida o’tiladi.",
                'image' => "talim.png",
                'status' => 1,
            ],
            [
                'title' => "IXTISOSLAShGAN MAKTA BLARDAGI NATIJA",
                'description' => "O’quv markazimizdan 12 nafar Al-Xorazmiy , 10 nafar Prizdent maktablari, 7 nafari esa Mirzo Ulug’bek maktabiga bundan tashqari 50 dan oshiq o’quvchi ixtisoslashgan maktablarga qabul qilindi.",
                'image' => "talim.png",
                'status' => 1,
            ],
            [
                'title' => "TAJRIBALI USTOZLAR",
                'description' => "Bizda haqiqiy professionallar Jahon va Respublika olimpiadasi sovrindorlari 🏅 dars beradi. Ustozlarni ta’lim metodikasi orqali farzandingiz qolganlardan o’zib ketadi.",
                'image' => "talim.png",
                'status' => 1,
            ],
            [
                'title' => "KO'P YILLIK TAJRIBA",
                'description' => "Qorako'l Ziyo o'quv markazi Toshkent shahrida 2012-yildan beri uzluksiz ravishda o'z faoliyatini davom ettirib kelmoqda.",
                'image' => "talim.png",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data) {
            Advantage::create($data);
        }
    }
}
