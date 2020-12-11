<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrderSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(OrderDetailSeeder::class);
        $this->call(SaleDetailSeeder::class);
    }
}
