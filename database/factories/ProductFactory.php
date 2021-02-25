<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->country,
            'description'=>$this->faker->text,
            'price_ht'=>$this->faker->randomNumber(3),
            'weight'=>$this->faker->randomNumber(2),
            'vat'=>$this->faker->randomNumber(2),
            'stock'=>$this->faker->randomNumber(2),
            'categories_id'=>1,

        ];
    }
}
