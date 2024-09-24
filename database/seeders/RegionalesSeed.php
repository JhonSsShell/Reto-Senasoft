<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionalesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regionales')->insert([
            'nombre_regional' => 'Santander',
            'cantidad_bicicletas' => 10
        ]);
        DB::table('regionales')->insert([
            'nombre_regional' => 'Choco',
            'cantidad_bicicletas' => 10
        ]);
        DB::table('regionales')->insert([
            'nombre_regional' => 'Magdalena',
            'cantidad_bicicletas' => 10
        ]);
        DB::table('regionales')->insert([
            'nombre_regional' => 'Cauca',
            'cantidad_bicicletas' => 10
        ]);
        DB::table('regionales')->insert([
            'nombre_regional' => 'Cesar',
            'cantidad_bicicletas' => 10
        ]);
        DB::table('regionales')->insert([
            'nombre_regional' => 'Antioquia',
            'cantidad_bicicletas' => 10
        ]);
        DB::table('regionales')->insert([
            'nombre_regional' => 'Amazonas',
            'cantidad_bicicletas' => 10
        ]);
    }
}
