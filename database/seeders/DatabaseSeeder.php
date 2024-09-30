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
        $this->call(AboutSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(ConsultationSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(JobSeeder::class);
    }
}
