<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cakes')->insert(['name'=>'Pastel Chocolate','description'=>'Pastel de chocolate para 5 personas','price'=>245.00,'image'=>null,'stock'=>0]);
        DB::table('cakes')->insert(['name'=>'Pastel Vainilla','description'=>'Pastel de vainilla para 3 personas','price'=>200.00,'image'=>null,'stock'=>0]);
        DB::table('cakes')->insert(['name'=>'Pastel Fresa','description'=>'Pastel de fresa para 8 personas','price'=>500.00,'image'=>null,'stock'=>0]);
        DB::table('cakes')->insert(['name'=>'Pastel Zanahoria','description'=>'Pastel de zanahoria para 6 personas','price'=>450.00,'image'=>null,'stock'=>0]);
        DB::table('cakes')->insert(['name'=>'Pastel Limon','description'=>'Pastel de limon para 4 personas','price'=>220.00,'image'=>null,'stock'=>0]);
    }
}
