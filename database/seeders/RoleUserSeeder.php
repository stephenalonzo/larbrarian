<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'role_id'   => 1,
                'user_id'   => 1
            ],
            [
                'role_id'   => 2,
                'user_id'   => 2
            ]
        ];

        foreach ($users as $user)
        {

            RoleUser::create([
                'role_id'   => $user['role_id'],
                'user_id'   => $user['user_id']
            ]);

        }

    }
}
