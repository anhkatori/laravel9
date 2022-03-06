<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('users')->insert([
            'username_login' => 'anhkatori',
            'email' => 'aaa@gmail.com',  
            'password' => '$2y$10$CzaWuzJY7ZryxtFaXUIj0uqrg10oKCaEzrgGJz9XaEt5.bp8q2XDy',
            'role_id' => '1'
        ]);
        DB::table('users')->insert([
            'username_login' => 'anhkatori2',
            'email' => 'aaa1@gmail.com',  
            'password' => '$2y$10$CzaWuzJY7ZryxtFaXUIj0uqrg10oKCaEzrgGJz9XaEt5.bp8q2XDy',
            'role_id' => '2'
        ]);
        DB::table('users')->insert([
            'username_login' => 'anhkatori2',
            'email' => 'aaa2@gmail.com',  
            'password' => '$2y$10$CzaWuzJY7ZryxtFaXUIj0uqrg10oKCaEzrgGJz9XaEt5.bp8q2XDy',
            'role_id' => '3'
        ]);
    }
}