<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use FakerGenerator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

// @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>

class BookFactory extends Factory
{
  // Define the model's default state.
  // @return array<string, mixed>

  protected $model = Book::class;

  public function definition(): array
  {
    $titleCase = $this->faker->sentence(3);

    return [
      'title' => ucwords($titleCase),
      // 'title' => $this->faker->sentence(3),
      'authorID' => rand(1, Author::count()),
      'abstract' => $this->faker->paragraph(3),
    ];
  }
}
