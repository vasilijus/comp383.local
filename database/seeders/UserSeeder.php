<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create(
            [
                'name'      =>'test',
                'email'     =>'test@test.com',
                'password'  => bcrypt('test'),
                'location'  => 'Longbridge',
            ]
        );
    }
}
