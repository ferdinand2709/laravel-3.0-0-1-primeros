<?php

class Create_Estrellas_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('estrellas',function($table)
		{
			$table->create();
			$table->increments('id');
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
			Schema::drop('estrellas');
	}

}