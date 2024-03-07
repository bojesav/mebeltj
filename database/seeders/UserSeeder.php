<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner =User::create([
            'name'=>'owner',
            'email'=>'owener@gmail.com',
            'password' => bcrypt('ownerasep')
        ]);
        $owner->assignRole('owner');

        $admin =User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        $owner->assignRole('admin');
    }
}
