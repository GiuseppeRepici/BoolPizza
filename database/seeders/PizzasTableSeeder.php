<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;
use Faker\Generator as Faker;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $pizza = new Pizza();
            $pizza->name = $faker->word();
            $pizza->type = $faker->word();
            $pizza->ingredients = $faker->sentence();
            $pizza->price = $faker->randomFloat(2, 4, 20);
            $pizza->save();
        }
    }
}
