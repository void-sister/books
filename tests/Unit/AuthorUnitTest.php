<?php

namespace Tests\Unit;

use App\Author;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorUnitTest extends TestCase
{
  use WithFaker;

  public function test_it_can_create_an_author()
  {
      $author = [
        'name' => $this->faker->name,
        'book_id' => $this->faker->numberBetween(1, 100)
      ];

      $this->post(route('authors.store'), $author)
        ->assertStatus(201);
  }
}
