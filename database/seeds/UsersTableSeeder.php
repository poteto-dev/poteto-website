<?php

use App\Entities\User;
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
        $users = [
            [
                'username'      =>  'fariz',
                'email'         =>  'fariz@poteto.dev',
                'password'      =>  env('SEEDER_PASSWORD'),
                'name'          =>  'Nizar Alfarizi',
                'role'          =>  'member'
            ]
        ];

        foreach ($users as $user) {
            $user = User::create([
                'username'      =>  $user['username'],
                'email'         =>  $user['email'],
                'password'      =>  $user['password'],
                'name'          =>  $user['name'],
            ]);

            $user->assignRole($user['role']);

            $this->command->info('User ' . $user->name . ' Created!');
        }
    }
}
