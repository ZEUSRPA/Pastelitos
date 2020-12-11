<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create(['idUser'=>1,'rfc'=>'1234HFJNV4E32','address'=>'Puerto Lobo #45','workplace'=>'vendedor']);
    }

   
}
