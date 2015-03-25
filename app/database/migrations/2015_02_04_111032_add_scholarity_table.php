<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddScholarityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scholarity', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('school', 255);
			$table->timestamp('start');
			$table->timestamp('end');
			$table->boolean('current')->default(false);
			$table->text('description');
			$table->integer("candidate_id");
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
		Schema::drop('scholarity');
	}

}
