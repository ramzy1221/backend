<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJiraBCPChangeLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Jira_BCP_ChangeLog', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('Issue', 100)->nullable();
			$table->string('Date', 100)->nullable();
			$table->string('From', 50)->nullable();
			$table->string('to', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Jira_BCP_ChangeLog');
	}

}
