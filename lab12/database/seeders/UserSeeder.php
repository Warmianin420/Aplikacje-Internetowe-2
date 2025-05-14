<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tworzymy użytkownika "Jan"
        \App\Models\User::create([
            'name' => 'Jan',
            'email' => 'jan@email.com',
            'password' => Hash::make('1234'),
        ]);

        // Wywołujemy inne seedery
        $this->call([
            CountrySeeder::class,
            TripSeeder::class,
        ]);
    }
}
