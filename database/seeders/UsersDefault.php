<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\console\Seeds\whithoutModelEvent;
use Illuminate\Database\Seeder;

class UsersDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lucas',
            'email' => 'lucas@example.com',
            'password' => bcrypt('123456789'),
        ]);
        User::create([
            'name' => 'Thales',
            'email' => 'thales@example.com',
            'password' => bcrypt('123456789'),
        ]);
        User::create([
            'name' => 'Maria',
            'email' => 'maria@example.com',
            'password' => bcrypt('123456789'),
        ]);
        User::create([
            'name' => 'amanda',
            'email' => 'amanda@example.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}