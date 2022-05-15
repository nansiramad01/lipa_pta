<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin PTA',
            'username' => 'Syarif Hidayatullah, S.T.',
            'no_hp' => '0863825782',
            'email' => 'admin@gmail.com',
            'level' => 'adminpta',
            'id_satker' => '1',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'operator PTA',
            'username' => 'PTA',
            'no_hp' => '082323643',
            'email' => 'operator@gmail.com',
            'level' => 'pejabatpta',
            'id_satker' => '1',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('operator');


        $users = [
            [
                'name' => 'operator Pekanbaru',
                'username' => 'papekanbaru',
                'no_hp' => '08343782',
                'email' => 'user_PA@gmail.com',
                'level' => 'adminsatker',
                'id_satker' => '2',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'operator Batam',
                'username' => 'pabatam',
                'no_hp' => '082323643',
                'email' => 'user_batam@gmail.com',
                'level' => 'adminsatker',
                'id_satker' => '3',
                'password' => bcrypt('12345678')
            ]

        ];

        foreach ($users as $user) {
            $user = User::create($user);
            $user->assignRole('user');
        }
    }
}
