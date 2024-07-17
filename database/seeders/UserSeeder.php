<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Naura',
            'email' => 'noraa@gmail.com',
            'password' => bcrypt('0227'),
        ]);

        User::create([
            'name' => 'noraa',
            'email' => 'naurasnabilah@gmail.com',
            'password' => bcrypt('0727'),
        ]);
    }
}
