<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddExperienceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experience', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company', 255);
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
		Schema::drop('experience');
	}

}
