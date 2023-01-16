<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Modestas Saunorius',
            'email' => '', // nurodyti email
            'email_verified_at' => '2023-01-01 00:00:00',
            'password' => '', // nurodyti slaptazodi
            'remember_token'=> null,
            'created_at' => '2023-01-01 00:00:00',
            'updated_at' => null,
            'usertype' => 'ADMIN'
        ]);
    }
}
