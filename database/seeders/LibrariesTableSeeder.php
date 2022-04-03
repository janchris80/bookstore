<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookLibrary;
use App\Models\Library;
use Illuminate\Database\Seeder;

class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Library::factory()->count(20)->create();
    }
}
