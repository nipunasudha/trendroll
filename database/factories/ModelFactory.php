<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Product::class, function (Faker\Generator $faker) {
  return [
    'seller_id' => $faker->numberBetween(1,50),
    'collection_id' => $faker->numberBetween(1,15),
    'name' => $faker->word,
    'price' => $faker->numberBetween(500,10000),
    'forher'=> $faker->randomElement($array = array ('0','1')),
    'forhim'=> $faker->randomElement($array = array ('0','1')),
    'created_at' =>$faker->dateTimeThisMonth($max = 'now'),
    'updated_at' =>$faker->dateTimeThisMonth($max = 'now')
  ];
});
$factory->define(App\User::class, function (Faker\Generator $faker) {
  return [
    'name' => $faker->name,
    'email' => $faker->email,
    'password'=>bcrypt('rcm123'),
    'level'=>'4',
    'sell'=>$faker->randomElement($array = array ('0','1')),
    'created_at' =>$faker->dateTimeThisMonth($max = 'now'),
    'updated_at' =>$faker->dateTimeThisMonth($max = 'now')
  ];
});
$factory->define(App\SellerReview::class, function (Faker\Generator $faker) {
  return [
    'reviewer_id' => $faker->numberBetween(1,50),
    'seller_id' =>$faker->numberBetween(1,50),
    'rating'=> $faker->randomElement($array = array ('1','2','3','4','5')),
    'comment'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
    'created_at' =>$faker->dateTimeThisMonth($max = 'now'),
    'updated_at' =>$faker->dateTimeThisMonth($max = 'now'),
  ];
});
