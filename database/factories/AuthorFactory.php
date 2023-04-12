<?php

namespace Database\Factories;

use App\Models\Author;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

// @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>

class AuthorFactory extends Factory
{
  // Define the model's default state.
  // @return array<string, mixed>

  protected $model = Author::class;

  public function definition(): array
  {
    return [
      'name' => $this->faker->name,
      'publisher' => $this->faker->company,
      'email' => $this->faker->unique()->companyEmail,
    ];
  }
}
