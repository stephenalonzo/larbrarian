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
        
        \App\Models\User::factory(2)->create();

        $this->call([
            RoleSeeder::class,
            RoleUserSeeder::class
        ]);

    }
}
