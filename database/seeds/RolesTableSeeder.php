<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'superadmin',
                'description' => 'system superadmin'
            ],
            [
                'name' => 'editor',
                'description' => 'SEO Editor'
            ],
            [
                'name' => 'writer',
                'description' => 'writer'
            ]

        ];

        DB::table('roles')->insert($roles);

    }
}
