<?php

use Illuminate\Database\Seeder;

class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('login')->insert([
            'username' => 'root',
            'password' => 'jarkom@123@2018',
        ]);
    }
}
