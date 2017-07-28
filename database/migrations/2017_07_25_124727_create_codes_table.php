<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('codes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('cert_id', 8)->comment('证书编号');
			$table->string('code', 20)->comment('验证码');
			$table->boolean('verified')->default(false)->comment('验证标志，0是未验证，1是已验证');
			$table->timestamp('verified_at')->nullable()->comment('验证时间');
			$table->date('valid_date')->nullable()->comment('有效时间');
			$table->timestamps();

			$table->foreign('cert_id')->references('gpzh')->on('certificates')->onDelete('cascade')->onUpdate('cascade');

			$table->index('cert_id', 'code');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('codes');
	}
}
