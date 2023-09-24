<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
        [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_admin' =>'1',
            'password' => \Hash::make('123456')
        ],
        [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'is_admin' =>'0',
            'password' => \Hash::make('123456')
        ]
        ];

        foreach($users as $key => $value){
            User::create($value);
        }
    }
}
