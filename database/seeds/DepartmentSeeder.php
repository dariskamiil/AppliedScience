<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departement::insert($departments);
        $departements = [
            [
                'department_id' => 1,
                'department_name' => 'RKA',
            ],
            [
                'department_id' => 2,
                'department_name' => 'REA',
            ],
            [
                'department_id' => 3,
                'department_name' => 'RPP',
            ],
            [
                'department_id' => 4,
                'department_name' => 'RPN',
            ],
        ];
    }
}
