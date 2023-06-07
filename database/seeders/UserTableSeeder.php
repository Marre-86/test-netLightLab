<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        User::create([
            'name' => 'Robb Jones',
            'email' => 'a@a',
            'password' => Hash::make('a'),
        ]);

        $user = User::where('name', 'Robb Jones')->first();
        $user->assignRole('Admin');
    }
}
