<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'あああ',
            'email' => 'emaaa@test.com',
            'password' => Hash::make('password123'),
            ],[
            'name' => 'いいい',
            'email' => 'emaaa2@test.com',
            'password' => Hash::make('password123'),
            ]

        ]);
    }
}
