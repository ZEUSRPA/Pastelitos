<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Zeus','email'=>'zeus.pallares@alumnos.udg.mx','phone'=>'3322145367','password'=>Hash::make('12345678'),'rol'=>1]);
        User::create(['name'=>'Juan','email'=>'juan@live.com','phone'=>'3322145367','password'=>Hash::make('12345678'),'rol'=>2]);
        User::create(['name'=>'Mario','email'=>'mario@live.com','phone'=>'3425145367','password'=>Hash::make('12345678'),'rol'=>2]);
        User::create(['name'=>'Ramon','email'=>'ramon@live.com','phone'=>'3332345367','password'=>Hash::make('12345678'),'rol'=>2]);
    }
}
