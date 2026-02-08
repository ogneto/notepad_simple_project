<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'usertest1@email.com',
                'password' => bcrypt('abc123456'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'usertest2@email.com',
                'password' => bcrypt('abc123456'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
