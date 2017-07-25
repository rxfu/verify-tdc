<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('certificates', function (Blueprint $table) {
			$table->string('time', 6)->comment('证书时间');
			$table->string('xm', 50)->comment('姓名');
			$table->string('xb', 2)->comment('性别');
			$table->string('sfz', 18)->comment('身份证号');
			$table->string('chn', 4)->comment('出生年');
			$table->string('chy', 2)->comment('出生月');
			$table->string('gzdw', 50)->comment('工作单位');
			$table->string('jyxgb', 10)->comment('高等教育学');
			$table->string('xlxgb', 10)->comment('高等教育心理学');
			$table->string('fggb', 10)->comment('高等教育法规概论');
			$table->string('ddgb', 10)->comment('高等学校教师职业道德修养');
			$table->string('gpzh', 8)->comment('证书编号');

			$table->primary('gpzh');

			$table->unique(['time', 'sfz']);
			$table->index(['gpzh', 'sfz']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('certificates');
	}
}
