<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class,5)->create();

        //for each category, generate three menu items
        $categories->each(function($category){
            factory(Menu::class,3)->create([
                'category_id' => $category->id,
            ]);
        });
    }
}
