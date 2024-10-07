<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(CenterSeeder::class);
        $this->call(AdvantageSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(FeadbackSeeder::class);
        $this->call(CourceSeeder::class);
        $this->call(QuestionSeeder::class);
    }
}
