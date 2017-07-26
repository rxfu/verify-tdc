<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('username')->unique()->comment('用户名');
			$table->string('email')->unique()->comment('Email');
			$table->string('password')->comment('密码');
			$table->string('name')->comment('真实姓名');
			$table->rememberToken();
			$table->string('last_login_ip')->nullable()->comment('最后一次登录IP地址');
			$table->timestamp('last_login_at')->nullable()->comment('最后一次登录时间');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
