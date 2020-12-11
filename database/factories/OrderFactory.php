<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use App\Models\Employee;
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
            'orderDate'=>$this->faker->date(),
            'payMethod'=>$this->faker->numberBetween(1,2),
            'dueDate'=>$this->faker->date(),
            'idEmployee'=>Employee::factory()->pastelero(),
            'idUser'=>User::factory()->client(),
            'status'=>$this->faker->numberBetween(1,2),

        ];
    }
}
