<?php

use App\ms_user;
use Illuminate\Database\Seeder;

class MsUserSeeder extends Seeder
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
            'id' => 4,
            'name' => 'RPN',
            'created_at' => '2019-12-23 07:24:34',
            'updated_at' => '2019-12-23 07:24:34',
            'created_by' =>'1',
            'updated_by' =>'1',
        ],
        ];
        ms_user::insert($user);
    }
}
