<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Jhon Carreño",
            'documento' => '1099737501',
            'telefono' => '3186040819',
            'email' => 'jhonfredy2325@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
    }
}
