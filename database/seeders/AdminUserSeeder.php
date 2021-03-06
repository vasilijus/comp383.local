<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(
            [
                'name'      =>'admin',
                'email'     =>'admin@test.com',
                'password'  => bcrypt('admin'),
                'dob'       => date('Y-m-d'),
                'role'      => 'admin',
                'location'  => 'London',
            ]
        );

    }
}
