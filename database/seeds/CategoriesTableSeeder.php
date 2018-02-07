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
            ['name' => 'Economics'],
            ['name' => 'Parenting'],
            ['name' => 'Career'],
            ['name' => 'Political'],
            ['name' => 'Finance'],
            ['name' => 'Gaming'],
            ['name' => 'Medical'],
            ['name' => 'Social Media'],
        ];

        DB::table('categories')->insert($categories);
    }
}
