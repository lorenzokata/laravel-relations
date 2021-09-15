<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creazione array
        $categories = ['Php', 'Node.js', 'Phyton', 'Java', 'Ruby', 'C#'];

        foreach ($categories as $category) {
            
            $newCategories = new Category();
            $newCategories->title = $category;
            $newCategories->save();
        }

    }
}

// CATEGORIES SEEDER