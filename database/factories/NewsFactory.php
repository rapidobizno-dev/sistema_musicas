<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [

        'image' => '99a7b5cc8d765f846723c54018a3d818.jpg',
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'subtitle' => $faker->sentence,
        'detach' => 'normal',
        'status' => 'published',
        'description' => $faker->paragraph,
        'date' => now(),
        'category_id' => $faker->numberBetween(5, 9),
    ];
});
