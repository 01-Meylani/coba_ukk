<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
$this->call([
        GuruSeeder::class,
        SiswaSeeder::class,
    ]);

        User::create([
            'name' => 'Meyy',
            'email' => 'meyy@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
