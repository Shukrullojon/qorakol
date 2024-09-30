<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Shukrullo',
            'email' => 'shukrullo@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $user2 = User::create([
            'name' => 'ArifSolar',
            'email' => 'arifsolar@gmail.com',
            'password' => Hash::make('arifsolar*w1'),
        ]);

        $role = Role::where('name','Admin')->first();
        $user->assignRole([$role->id]);
        $user2->assignRole([$role->id]);
    }
}
