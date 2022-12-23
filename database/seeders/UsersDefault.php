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
            'name' => 'Lucas Alves',
            'email' => 'lucas@example.com',
            'password' => bcrypt('123456789'),
        ]);
        User::create([
            'name' => 'Thales Andrade',
            'email' => 'thales@example.com',
            'password' => bcrypt('123456789'),
        ]);
        User::create([
            'name' => 'Maria Oliveira',
            'email' => 'maria@example.com',
            'password' => bcrypt('123456789'),
        ]);
        User::create([
            'name' => 'Amanda Silva',
            'email' => 'amanda@example.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}