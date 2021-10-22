<?php

namespace Database\Seeders;

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
        //
        $user = DB::table('users');
        $user->insert([
            'name' => 'Ali',
            'email' => 'ali@mail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
