<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Tarjetas'],
            ['name' => 'Deudas'],
            ['name' => 'Préstamos'],
            ['name' => 'Haz dinero'],
            ['name' => 'Emprender'],
            ['name' => 'Economía']
        ];

        DB::table('categories')->insert($categories);
    }
}
