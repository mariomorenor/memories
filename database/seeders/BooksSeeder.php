<?php

namespace Database\Seeders;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::updateOrInsert(
            ["name"=>"Mi primer álbum"],
            [
                "description"=>"Aquí va la descripción del álbum. Por favor, detalla algo bonito!",
                "date"=>Carbon::now(),
                "user_id"=>1
            ]
        );
    }
}
