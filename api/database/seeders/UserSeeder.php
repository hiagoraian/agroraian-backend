<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            'name' => 'Hiago Raian Gonçalves',
            'email' => 'hiago@gmail.com',
            'cpf' => '08823706696',
            'password' => Hash::make('senha123'), 
            'email_verified_at' => now(),
        ]);
    }
}
