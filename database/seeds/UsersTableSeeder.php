<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Alonso Rodriguez',
                'email' => 'arod@gmail.com',
                'password' => bcrypt(123456)
            ],
            [
                'name' => 'SEO Editor',
                'email' => 'seod@gmail.com',
                'password' => bcrypt(123456)
            ],
            [
                'name' => 'Writer 1',
                'email' => 'writer1@gmail.com',
                'password' => bcrypt(123456)
            ],
            [
                'name' => 'Writer 2',
                'email' => 'writer2@gmail.com',
                'password' => bcrypt(123456)
            ]
        ];

        DB::table('users')->insert($users);
    }
}
