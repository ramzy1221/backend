<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJiraBCPSupTCTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('JiraBCPSupTC', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('Issue', 100)->nullable();
			$table->string('SupTCId', 100)->nullable();
			$table->string('TCImplStatus', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('JiraBCPSupTC');
	}

}
