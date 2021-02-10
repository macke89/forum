<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'mark.opp.1989@gmail.com',
            'email_verified_at' => now(),
            'role' => 'SuperAdmin',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
