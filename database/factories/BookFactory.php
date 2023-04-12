<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
  // Define the model's default state.
  // @return array<string, mixed>

  public function definition(): array
  {
    $titleCase = $this->faker->sentence(3);

    return [
      'title' => ucwords($titleCase),
      'authorID' => rand(1, Author::count()),
      'abstract' => $this->faker->paragraph(3),
    ];
  }
}
