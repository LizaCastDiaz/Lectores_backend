<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'name' => 'Juan',
                    'email' => 'juan@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => '2019-01-04 16:35:12',
                    'updated_at' => '2019-01-04 16:35:12',
                    'remember_token' => 'token',
                    'role_id' =>  '1'

                ],
                [
                    'name' => 'Ana',
                    'email' => 'Anan@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => '2019-01-04 16:35:12',
                    'updated_at' => '2019-01-04 16:35:12',
                    'remember_token' => 'token',
                    'role_id' =>  '2'

                ]


            ]

        );
    }
}
