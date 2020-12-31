<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrInsert(
            ["email"=>"a@a"],
            [
                "name"=>"Mario Moreno",
                "password"=>Hash::make("123")
            ]
        );
        User::updateOrInsert(
            ["email"=>"andrea@lamejoramiga.com"],
            [
                "name"=>"Andrea Manzaba",
                "password"=>Hash::make("123")
            ]
        );
    }
}
