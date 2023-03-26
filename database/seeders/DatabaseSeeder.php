<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\User::factory(1)->create([
            'first_name'    => 'Phil',
            'last_name'     => 'Brooks',
            'email'         => 'cmpunk@wwe.com',
            'password'      => bcrypt('bestintheworld')
        ]);

        \App\Models\User::factory(1)->create([
            'first_name'    => 'John',
            'last_name'     => 'Cena',
            'email'         => 'ucantseeme@wwe.com',
            'password'      => bcrypt('ucantcme')
        ]);

        $this->call([
            RoleSeeder::class,
            RoleUserSeeder::class
        ]);

    }
}
