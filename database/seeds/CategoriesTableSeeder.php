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
            [
                'name' => 'Tarjetas',
                'permalink' => 'tarjetas'
            ],
            [
                'name' => 'Deudas',
                'permalink' => 'deudas'
            ],
            [
                'name' => 'Préstamos',
                'permalink' => 'prestamos'
            ],
            [
                'name' => 'Haz dinero',
                'permalink' => 'haz-dinero'
            ],
            [
                'name' => 'Emprender',
                'permalink' => 'emprender'
            ],
            [
                'name' => 'Economía',
                'permalink' => 'economia'
            ]
        ];

        DB::table('categories')->insert($categories);
    }
}
