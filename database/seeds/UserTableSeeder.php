<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Esveraldo',
            'email' => 'esveraldo@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
