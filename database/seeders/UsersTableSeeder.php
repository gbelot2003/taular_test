<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(50)->create();

        \App\Models\User::factory()->create([
            'name' => 'Gerardo Belot',
            'email' => 'gbelot2003@hotmail.com',
        ]);    }
}
