<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'prof',
            'email' => 'emikeovo@gmail.com',
            'password' => Hash::make('prof@dgp.com'),
        ]);
    }
}
