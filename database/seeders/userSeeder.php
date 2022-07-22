<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
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
                'email' => 'admin@localhost.com',
                'username' => 'admin',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
            );
    }
}
