<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'prof',
            'email' => 'emikeovo@gmail.com',
            'password' => Hash::make('prof@dgp.com'),
        ]);
    }
}
