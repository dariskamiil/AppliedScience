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
        $departments = [
            [
                'department_id' => 1,
                'department_name' => 'RKA',
                'created_at' => '2019-12-23 07:24:34',
                'updated_at' => '2019-12-23 07:24:34',
                'created_by' => '1',
                'updated_by' => '1',
            ],
            [
                'department_id' => 2,
                'department_name' => 'REA',
                'created_at' => '2019-12-23 07:24:34',
                'updated_at' => '2019-12-23 07:24:34',
                'created_by' => '1',
                'updated_by' => '1',
            ],
            [
                'department_id' => 3,
                'department_name' => 'RPP',
                'created_at' => '2019-12-23 07:24:34',
                'updated_at' => '2019-12-23 07:24:34',
                'created_by' => '1',
                'updated_by' => '1',
            ],
            [
                'department_id' => 4,
                'department_name' => 'RPN',
                'created_at' => '2019-12-23 07:24:34',
                'updated_at' => '2019-12-23 07:24:34',
                'created_by' => '1',
                'updated_by' => '1',
            ],
        ];
        Department::insert($departments);
    }
}
