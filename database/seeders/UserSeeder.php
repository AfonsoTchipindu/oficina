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
        DB::table('users')->insert([
            [
                'name'=>'Sulay',
                'username'=>'msflix',
                'email'=>'sulay04@gmail.com',
                'role'=>'admin',
                'status'=>'active',
                'password'=>bcrypt('1234')
            ],
            [
                'name'=>'secretario',
                'username'=>'secretario',
                'email'=>'secretario@gmail.com',
                'role'=>'secretario',
                'status'=>'active',
                'password'=>bcrypt('1234')
            ],
            [
                'name'=>'tecnico',
                'username'=>'tecnico',
                'email'=>'tecnico@gmail.com',
                'role'=>'tecnico',
                'status'=>'active',
                'password'=>bcrypt('1234')
            ],
            [
                'name'=>'cliente',
                'username'=>'user',
                'email'=>'cliente@gmail.com',
                'role'=>'user',
                'status'=>'active',
                'password'=>bcrypt('1234')
            ],
            [
                'name'=>'gerente',
                'username'=>'gerente',
                'email'=>'gerente@gmail.com',
                'role'=>'gerente',
                'status'=>'active',
                'password'=>bcrypt('1234')
            ],
        ]);
    }
}
