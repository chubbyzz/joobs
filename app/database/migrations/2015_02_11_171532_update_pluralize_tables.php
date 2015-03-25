<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePluralizeTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::rename("candidate", str_plural("candidate"));
		Schema::rename("experience", str_plural("experience"));
		Schema::rename("tool", str_plural("tool"));
		Schema::rename("address", str_plural("address"));
		Schema::rename("phone", str_plural("phone"));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::rename(str_plural("candidate"), "candidate");
		Schema::rename(str_plural("experience"), "experience");
		Schema::rename(str_plural("tool"), "tool");
		Schema::rename(str_plural("address"), "address");
		Schema::rename(str_plural("phone"), "phone");
	}

}
