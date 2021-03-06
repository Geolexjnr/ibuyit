<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Hush;

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
        DB::table('users')->insert([
            'firstname' => 'Mary',
            'lastname' => 'chileya',
            'email' => 'mary@chileya.com',
            'password' => Hash::make('root')

        ]);
    }
}
