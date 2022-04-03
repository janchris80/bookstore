<?php

namespace Database\Seeders;

use App\Models\BookLibrary;
use Illuminate\Database\Seeder;

class BookLibrarySeeder extends Seeder
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
