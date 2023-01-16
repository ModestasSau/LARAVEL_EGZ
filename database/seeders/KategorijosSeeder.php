<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorijosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategorijos')->insert([
            'pavadinimas' => 'Gazuoti gėrimai',
            'created_at' => '2023-01-01 00:00:00'
        ]);
        DB::table('kategorijos')->insert([
            'pavadinimas' => 'Vanduo'
        ]);
        DB::table('kategorijos')->insert([
            'pavadinimas' => 'Duona'
        ]);
        DB::table('kategorijos')->insert([
            'pavadinimas' => 'Kruopos'
        ]);
        DB::table('kategorijos')->insert([
            'pavadinimas' => 'Aliejai'
        ]);
    }
}
