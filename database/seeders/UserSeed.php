<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'admin@flowers-center.com'
        ], [
           'name' => 'Super Admin',
           'password' => bcrypt('password')
        ]);
    }
}
