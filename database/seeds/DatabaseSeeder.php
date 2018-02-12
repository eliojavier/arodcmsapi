<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        factory('App\User', 15)->create();
        factory('App\Article', 10)->create();
        $this->call(ArticlesTableSeeder::class);
        $this->call(ArticleCategoryTableSeeder::class);

    }
}
