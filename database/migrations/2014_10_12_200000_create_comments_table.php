<?php

/**
 * Run the migrations
 *
 * @return void
 */

public function up()
{
    Schema::create('comments', function(Blueprint $table)
    {
        $table->increments('id');
        $table->string('text');
        $table->string('author');
        $table->timestamps();
    });
}
