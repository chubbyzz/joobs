<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('location');

            $table->integer('number')->defalt(1);
            $table->decimal('salary', 15,2)->nullAble();
            $table->text('requirements')->nullAble();
            $table->text('benefits')->nullAble();
            $table->string('type')->nullAble();
            $table->string('form')->nullAble();

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
		Schema::drop('jobs');
	}

}
