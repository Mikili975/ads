<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    $firstName = $faker->firstName;
    $lastName = $faker->lastName;

    return [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'url_name' => strtolower($firstName).'.'.strtolower($lastName),
        'email' => strtolower($firstName).'.'.strtolower($lastName).'@example.com',
        'phone' => $faker->phoneNumber,
        'city' => $faker->city,
        'dob' => $faker->dateTimeBetween($startDate = '-65 years', $endDate = '-18 years', $timezone = date_default_timezone_get()),
        'password' => $password ?: $password = bcrypt('PingPong1'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Ad::class, function (Faker $faker) {

    $title = $faker->sentence();
    $nullOrPrice = random_int(0,1);

    if ($nullOrPrice == 0)
    {
        $price = null;
    }
    else
    {
        $price = $faker->numberBetween(10,1000);
    }

    return [
        'category_id' => random_int(1,7),
        'title' => $title,
        'body' => $faker->paragraph(),
        'slug' => str_slug($title),
        'price' => $price,
    ];

});

$factory->define(App\Category::class, function (Faker $faker) {

    return [
        'name' => $faker->word(),
        'slug' => $faker->word(),
    ];
});
