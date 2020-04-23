<?php

use App\User;
use Illuminate\Database\Seeder;

class MsUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => '1',
                'name' => 'Admin Seeder',
                'username' => 'admins',
                'password' => '$2y$10$YyHv5ZQYj2ZLIHrr2cyp/.tkPwoeunuu8Bcd5EGtu8KoAghSRkn6C',
                'role' => 'admin',
                'email' => 'admin@example.com',
                'approved' => '1',
                'is_active'=> '1',
                'created_at' => '2019-12-23 07:24:34',
                'updated_at' => '2019-12-23 07:24:34',
            ],
            [
                'id' => '2',
                'name' => 'User Seeder',
                'username' => 'users',
                'password' => '$2y$10$YyHv5ZQYj2ZLIHrr2cyp/.tkPwoeunuu8Bcd5EGtu8KoAghSRkn6C',
                'role' => 'user',
                'email' => 'user@example.com',
                'approved' => '1',
                'is_active'=> '1',
                'created_at' => '2019-12-23 07:24:34',
                'updated_at' => '2019-12-23 07:24:34',
            ],
        ];
        user::insert($user);
    }
}

//You can log in using 2 seeder accounts, with the following conditions:
//- email: admin@example.com
//password: password
//- email: user@example.com
//password: password
