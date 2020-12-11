<?php

namespace Database\Factories;

use App\Models\Cake;
use Illuminate\Database\Eloquent\Factories\Factory;

class CakeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cake::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(3),
            'description'=>$this->faker->sentence(),
            'price'=>$this->faker->randomFloat(2,200,2000),
            'stock'=>$this->faker->numberBetween(1,10),
        ];
    }
}
