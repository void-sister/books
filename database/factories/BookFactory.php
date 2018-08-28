<?php

use Faker\Generator as Faker;


$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'author_id' => function() {
            return factory(App\Author::class)->create()->id;
        },
    ];
});
