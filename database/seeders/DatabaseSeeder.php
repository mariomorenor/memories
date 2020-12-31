<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Picture;
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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        Book::factory(100)->create();
        Picture::factory(5000)->create();
    }
}
