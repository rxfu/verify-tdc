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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;

	return [
		'name'           => $faker->name,
		'email'          => $faker->unique()->safeEmail,
		'password'       => $password ?: $password = bcrypt('secret'),
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Certificate::class, function (Faker\Generator $faker) {
	return [
		'time'  => '201609',
		'xm'    => $faker->name,
		'xb'    => $faker->randomElement(['男', '女']),
		'sfz'   => $faker->unique()->randomNumber(),
		'chn'   => $faker->year(),
		'chy'   => $faker->month(),
		'gzdw'  => $faker->company(),
		'jyxgb' => '合格',
		'xlxgb' => '合格',
		'fggb'  => '合格',
		'ddgb'  => '合格',
		'gpzh'  => $faker->unique()->randomNumber(8),
	];
});
