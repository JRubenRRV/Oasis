<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        User::factory()->create([
            'name' => 'Jose Ruben,Ramirez,Ruiz Velasco',
            'email' => 'jruben.rrv95@gmail.com',
            'password' => Hash::make('test1234'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
