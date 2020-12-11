<?php

namespace Database\Factories;

use App\Models\SaleDetail;
use App\Models\Cake;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SaleDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idSale'=>Sale::factory(),
            'idCake'=>Cake::factory(),
            'price'=>function (array $attributes) {
                return Cake::find($attributes['idCake'])->price;
            },
            'quantity'=>$this->faker->numberBetween(1,3),

        ];
    }
}
