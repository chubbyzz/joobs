<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPrimaryKeyToCompany extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('companies', function (Blueprint $table) {
			$table->increments('id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('companies', function (Blueprint $table) {
			$table->dropColumn(['id']);

		});
	}

}
