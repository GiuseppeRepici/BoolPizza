<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = ['mozzarella', 'pomodoro', 'basilico' , 'olio', 'pistacchio'];
        foreach ($ingredients as $ingredient_value) {
            $ingredient = new Ingredient();
            $ingredient->name = $ingredient_value;
            $ingredient->slug = Str::slug($ingredient->name, '-');
            $ingredient->save();
        }
    }
}
