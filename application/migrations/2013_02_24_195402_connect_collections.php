<?php

class Connect_Collections {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('users', function($table) {
            $table->integer('collection_id')->unsigned();
        });
        DB::table('users')->update(array('collection_id' => 1));
        Schema::table('users', function($table) {
            $table->foreign('collection_id')->references('id')->on('collections');
        });
        Schema::table('records', function($table) {
            $table->integer('collection_id')->unsigned();
        });
        DB::table('records')->update(array('collection_id' => 1));
        Schema::table('records', function($table) {
            $table->foreign('collection_id')->references('id')->on('collections');
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function($table) {
            $table->drop_column('collection_id');
        });
        Schema::table('records', function($table) {
            $table->drop_column('collection_id');
        });
	}

}