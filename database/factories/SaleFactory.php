<?php

namespace Database\Factories;

use App\Models\Sale;
use App\Models\Employee;
use App\Models\User;
use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'saleDate'=>$this->faker->date(),
            'payMethod'=>$this->faker->numberBetween(1,2),
            'idEmployee'=>Employee::factory()->pastelero(),
            'idUser'=>User::factory()->client(),
            'idCoupon'=>Coupon::factory(),

        ];
    }
}
