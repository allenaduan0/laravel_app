<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name'  => 'Allen Christopher',
            'email' => 'allen@email.com'
        ]);

        Listing::factory(6)->create([
            'user_id' =>$user->id
        ]);
        // Listing::create([
        //     'title'         =>  'Laravel Senior Developer',
        //     'tags'          =>  'laravel, javascript',
        //     'company'       =>  'Google Philippines',
        //     'location'      =>  'Taguig, PH',
        //     'email'         =>  'allenaduan610@gmail.com',
        //     'website'       =>  'https://www.google.com',
        //     'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        // ]);
        // Listing::create([
        //     'title'         =>  'Flight Attendant',
        //     'tags'          =>  'FA',
        //     'company'       =>  'Philippines Airline',
        //     'location'      =>  'Taguig, PH',
        //     'email'         =>  'paubianca@gmail.com',
        //     'website'       =>  'https://www.airline.ph',
        //     'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
