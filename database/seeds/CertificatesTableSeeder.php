<?php

use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::statement('TRUNCATE TABLE certificates');

		factory(App\Certificate::class, 50)->create();
	}
}
