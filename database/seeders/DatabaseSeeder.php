<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\flat;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create(
            [
                'name' => 'Test One',
                'email' => 'test1@example.com',
                'password' => Hash::make('password')
            ]
        );

        User::create(
            [
                'name' => 'Test Two',
                'email' => 'test2@example.com',
                'password' => Hash::make('password')
            ]
        );

        User::create(
            [
                'name' => 'Test Three',
                'email' => 'test3@example.com',
                'password' => Hash::make('password')
            ]
        );
        for ($i = 1; $i < 4; $i++) {
            flat::create(
                [
                    'name' => 'Teszt Lakás ' . $i,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'user_id' => $i,
                    'img1' => '0' . $i . '-1.jpeg',
                    'img2' => '0' . $i . '-2.jpeg',
                    'img3' => '0' . $i . '-3.jpeg',
                ]
            );
        }
    }
}
