<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	"name" => 'SampleOne',
        	"photo" => 'images/one.jpg'
        ]);

         Category::create([
        	"name" => 'SampleTwo',
        	"photo" => 'images/one.jpg'
        ]);

         Category::create([
        	"name" => 'SampleThree',
        	"photo" => 'images/one.jpg'
        ]);

         Category::create([
        	"name" => 'SampleFour',
        	"photo" => 'images/one.jpg'
        ]);
    }
}
