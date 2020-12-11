<?php

namespace Database\Factories;


use App\Models\OrderDetail;
use App\Models\Cake;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idOrder'=>Order::factory(),
            'idCake'=>Cake::factory(),
            'price'=>function (array $attributes) {
                return Cake::find($attributes['idCake'])->price;
            },
            'quantity'=>$this->faker->numberBetween(1,3),
        ];
    }
}
