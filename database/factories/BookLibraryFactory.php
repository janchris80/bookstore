<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Library;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookLibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id' => $this->faker->randomElement(Book::all())['id'],
            'library_id' => $this->faker->randomElement(Library::all())['id'],
        ];
    }
}
