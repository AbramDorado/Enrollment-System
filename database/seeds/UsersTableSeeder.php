<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$xrsPLYaYoSrvak108tqKouwl9I/3VZMJ5h/I96pOCqwg.c0Dl4ILy',
                'remember_token' => null,
            ],
            [
                
                'name'           => 'Institution',
                'email'          => 'institution@institution.com',
                'password'       => '$2y$10$xrsPLYaYoSrvak108tqKouwl9I/3VZMJ5h/I96pOCqwg.c0Dl4ILy',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
