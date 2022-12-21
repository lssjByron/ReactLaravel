<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Smith',
            'email' => 'john_smith@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => '1',
            'remember_token' => Str::random(10),
        ]);
    }
}
