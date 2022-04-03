<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookLibrary;
use Illuminate\Database\Seeder;

class BookLibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookLibrary::factory()->count(100)->create();
    }
}
