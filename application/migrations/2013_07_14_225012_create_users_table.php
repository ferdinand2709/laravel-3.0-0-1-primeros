<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
				Schema::table('users',function($table)
		{
			$table->create();
			$table->increments('id');
			$table->string('email');
		});

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		
		Schema::drop('users');
	}

}