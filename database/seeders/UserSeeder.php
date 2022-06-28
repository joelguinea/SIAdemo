<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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
            'name' => 'Dominic Makabugto',
            'email' => 'DCmakabs@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        [
            'name' => 'Lando Makabughat',
            'email' => 'Landsix@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        [
            'name' => 'Naldo Hayang',
            'email' => 'Hayangakonaldo@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
