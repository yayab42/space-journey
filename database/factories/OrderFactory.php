<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_date'=>$this->faker->date(),
            'delivery_date'=>$this->faker->date(),
            'number'=>$this->faker->randomNumber(),
            'users_id'=>$this->faker->randomNumber(),
        ];
    }
}
