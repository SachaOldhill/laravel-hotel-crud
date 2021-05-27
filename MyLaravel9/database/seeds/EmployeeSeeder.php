<?php

use Illuminate\Database\Seeder;

use App\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        factory(Employee::class, 50) -> create();
    }
}
