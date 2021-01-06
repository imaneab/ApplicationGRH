<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Abouakil Imane',
            'email' => 'imaneab@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10),

        ]);
    }
}
