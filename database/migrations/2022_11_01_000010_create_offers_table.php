<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration {

	public function up()
	{
		Schema::create('offers', function(Blueprint $table) {
			$table->id();
			$table->enum('type', ['fixed', 'percentage']);
			$table->integer('value')->default('0');
			$table->datetime('from');
			$table->datetime('to');
			$table->boolean('status')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('offers');
	}
}
