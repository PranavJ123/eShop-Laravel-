<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            // [
            // 'name' =>'Peter Parker',
            // 'email' => 'peter@parker.com',
            // 'password' => Hash::make('12345')
            // ],
            [
            'name' =>'Aviral Jain',
            'email' => 'aviral123@gmail.com',
            'password' => Hash::make('12345')
            ]

        ]); 
    }
}
