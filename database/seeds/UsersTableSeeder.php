<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $user = User::where('email', 'wilker@gmail.com')->first();

        if(!$user){
            User::create([
                'name' => 'Manoel Wilker Alves da Silva',
                'email' => 'wilker@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
