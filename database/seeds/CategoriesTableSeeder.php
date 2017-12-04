<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['home appliances', 'cars', 'movies', 'music', 'books', 'cycling', 'other'];

        foreach ($categories as $category)
        {
            factory('App\Category')->create([
                'name' => $category,
                'slug' => str_slug($category),
            ]);
        }


    }
}
