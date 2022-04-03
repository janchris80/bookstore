<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['in', 'out']);

        if ($status === 'out') {
            $dateLend = Carbon::createFromTimestamp(
                $this->faker
                    ->dateTimeBetween('-1 week', '+1 week')
                    ->getTimestamp()
            )->format('Y-m-d H:i:s');

            $dateReturn = Carbon::createFromDate($dateLend)
                ->addMonth()
                ->format('Y-m-d H:i:s');
        }

        return [
            'title' => $this->faker->words(2, true),
            'status' => $status,
            'date_lend' => $dateLend ?? null,
            'date_return' => $dateReturn ?? null,
        ];
    }
}
