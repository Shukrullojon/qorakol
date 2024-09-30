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
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png",
                'status' => 1,
            ],
            [
                "name" => "abc",
                'link' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png",
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Partner::create($data);
        }
    }
}
