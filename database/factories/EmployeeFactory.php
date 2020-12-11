<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idUser'=>User::factory(),
            'rfc'=>$this->faker->text(13),
            'address'=>$this->faker->text(50),
        ];
    }

    public function pastelero(){
        return $this->state(function (array $attributes) {
            return [
                'workplace' => 'pastelero',
                
            ];
        });
    }

    public function vendedor(){
        return $this->state(function (array $attributes) {
            return [
                'workplace' => 'vendedor',
            ];
        });
    }
}
