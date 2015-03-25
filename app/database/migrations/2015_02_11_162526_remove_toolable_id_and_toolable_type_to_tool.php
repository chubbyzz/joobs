<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveToolableIdAndToolableTypeToTool extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tool', function(Blueprint $table)
		{
			$table->dropColumn("toolable_id");
			$table->dropColumn("toolable_type");
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tool', function(Blueprint $table)
		{
			$table->integer("toolable_id");
			$table->string("toolable_type", 200);
		});
	}

}
