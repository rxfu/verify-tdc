<?php

use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::statement('TRUNCATE TABLE certificates CASCADE');

		factory(App\Cetificate::class, 50)->create()->each(function ($c) {
			$c->save();
		});
	}
}
