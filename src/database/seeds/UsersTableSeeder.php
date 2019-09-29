<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fixed users:
        User::insert([
            'first_name' => 'Danijel',
            'last_name' => 'Merli',
            'email' => 'danijel.merli@gmail.com',
            'password' => '$2y$10$U.Cgk.aJlBqsSMuEp1raDuG2AniUgSwQ41l.GSV2equwuXMB13KXm', 
            'remember_token' => str_random(10)
        ]);

        User::insert([
            'first_name' => 'Marko',
            'last_name' => 'Krizan',
            'email' => 'markokrizan64@gmail.com',
            'password' => '$2y$10$U.Cgk.aJlBqsSMuEp1raDuG2AniUgSwQ41l.GSV2equwuXMB13KXm',
            'remember_token' => str_random(10)
        ]);

        User::insert([
            'first_name' => 'Erik',
            'last_name' => 'Drobina',
            'email' => 'drobinaerik@gmail.com',
            'password' => '$2y$10$U.Cgk.aJlBqsSMuEp1raDuG2AniUgSwQ41l.GSV2equwuXMB13KXm',
            'remember_token' => str_random(10)
        ]);

        User::insert([
            'first_name' => 'David',
            'last_name' => 'Bošnjak',
            'email' => 'david.bosnjak96@gmail.com',
            'password' => '$2y$10$U.Cgk.aJlBqsSMuEp1raDuG2AniUgSwQ41l.GSV2equwuXMB13KXm',
            'remember_token' => str_random(10)
        ]);

        //50 random users
        factory(User::class, 50)->create();
    }
}
