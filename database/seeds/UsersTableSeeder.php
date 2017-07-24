<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::statement('TRUNCATE TABLE users CASCADE');

		User::create([
			'name'     => 'admin',
			'email'    => 'admin@gmail.com',
			'password' => bcrypt('123456'),
		]);
	}
}
