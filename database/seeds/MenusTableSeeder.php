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
    public function run(){
        // $categories = factory(Category::class,5)->create();

        // //for each category, generate three menu items
        // $categories->each(function($category){
        //     factory(Menu::class,3)->create([
        //         'category_id' => $category->id,
        //     ]);
        // });

        
        $dummyCategory = collect([
            'Soups',
            'Chicken Main Course',
            'Non-veg Rice',
            'Non-veg Noodles'
        ]);

        $dummyCategory->each(function($value){
            factory(Category::class)->create(['name' => $value]);
        });

        $this->addSoups();
        $this->addChickenMainCourse();
        $this->addNonVegRice();
        $this->addNonVegNoodles();
    
    }
    
    private function addSoups(){
        factory(Menu::class)->create([
            'name' => 'Egusi Soup',
            'price' => 850,
            'category_id' => 1,
            'description' => 'Egusi soup with options of beef/goat meat, chicken 
            and a bottle of water or mineral.'
        ]);

        factory(Menu::class)->create([
            'name' => 'Ogbono Soup',
            'price' => 1250,
            'category_id' => 1,
            'description' => 'Ogbono soup with options of beef/goat meat, chicken 
            and a bottle of water or mineral.'
        ]);

        factory(Menu::class)->create([
            'name' => 'Oha Soup',
            'price' => 1200,
            'category_id' => 1,
            'description' => 'Oha soup with options of beef/goat meat, chicken 
            and a bottle of water or mineral.'
        ]);
    }

    private function addChickenMainCourse(){
        factory(Menu::class)->create([
            'name' => 'Grilled Chicken Panini',
            'price' => 1020,
            'category_id' => 2,
            'description' => 'Fresh mozzarella, roasted red peppers, sliced tomatoes and cucumbers 
            Onions and carrot.'
        ]);

        factory(Menu::class)->create([
            'name' => 'Sapo Chicken',
            'price' => 1250,
            'category_id' => 2,
            'description' => 'Sapo chicken is chinese indonesia tofu dish traditionally cooked and
            served wit clay pot It might be served plainly as vegetarian dis, or commonly enrichen
            with chicken, sea food(especially shrimps), minced beef or pork'
        ]);

        factory(Menu::class)->create([
            'name' => 'Chicken Black Bean',
            'price' => 1350,
            'category_id' => 2,
            'description' => 'Fermented black bean are found in Asian markets and once you buy them, 
            they last pretty much forever! Also called salted black beans, the are used in the black
            bean chicken you order from Chinese take-out and has a much different flavour than the
            Mexican type of black beans'
        ]);
    }
    
    private function addNonVegRice(){
        factory(Menu::class)->create([
            'name' => 'Fried Rice and Chicken',
            'price' => 900,
            'category_id' => 3,
            'description' => 'Fied rice with chicken.'
        ]);

        factory(Menu::class)->create([
            'name' => 'Jollof Rice and Chicken',
            'price' => 850,
            'category_id' => 3,
            'description' => 'Fried Rice with chicken'
        ]);

        factory(Menu::class)->create([
            'name' => 'Banga Rice and Fish',
            'price' => 1150,
            'category_id' => 3,
            'description' => 'Banga Rice special'
        ]);
    }
    
    private function addNonVegNoodles(){
        factory(Menu::class)->create([
            'name' => 'Indomie and Chicken',
            'price' => 900,
            'category_id' => 4,
            'description' => 'Chicken and indomie.'
        ]);

        factory(Menu::class)->create([
            'name' => 'Minimie and Chicken',
            'price' => 550,
            'category_id' => 4,
            'description' => 'Chicken and mininie'
        ]);

        factory(Menu::class)->create([
            'name' => 'Dangote and Fish',
            'price' => 620,
            'category_id' => 4,
            'description' => 'Banga Rice special'
        ]);
    }
    
}
