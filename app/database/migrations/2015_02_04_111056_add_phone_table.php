<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPhoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phone', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("kind", 1);
			$table->string("phone", 15);
			$table->string("phoneble_type");
			$table->integer("phoneble_id");
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phone');
	}

}
