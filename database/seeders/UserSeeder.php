<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            'username' => 'author1',
            'password'=> Hash::make('12345678'),
            'name' => 'author',
            'role' => 'author',
        ]);

        DB::table('account')->insert([
            'username' => 'admin1',
            'password'=> Hash::make('password'),
            'name' => 'admin',
            'role' => 'admin',
        ]);
    }
}
