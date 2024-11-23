<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "Manoel Silva",
                'username' => 'devdias',
                'email'=> 'admin@devdias.com.br',
                'role'=> 'admin',
                'status' => 'active',
                'password'=> bcrypt('123'),
            ],

            [
                "name" => "vendedor vendor",
                'username' => 'vendor',
                'email'=> 'vendedor@devdias.com.br',
                'role'=> 'vendor',
                'status' => 'active',
                'password'=> bcrypt('123'),
            ],

            [
                "name" => "Cliente user",
                'username' => 'user',
                'email'=> 'cliente@devdias.com.br',
                'role'=> 'user',
                'status' => 'active',
                'password'=> bcrypt('123'),
            ]
        ]);
}
}
