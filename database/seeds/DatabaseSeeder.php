<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Author::class, 10)->create()->each(function ($author)
      {
        factory(App\Book::class, 5)->create(['author_id'=>$author->id]);
      });
    }
}
