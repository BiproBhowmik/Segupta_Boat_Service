<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

	public function up()
	{
		Schema::create('packages', function(Blueprint $table) {
			$table->id();
			$table->foreignId('offer_id')->nullable()->constrained('offers');
			$table->string('name', 150);
			$table->integer('allowed_person')->default('0');
			$table->integer('price')->default('0');
			$table->text('description')->nullable();
			$table->integer('holiday_price')->default('0');
			$table->integer('weekday_price')->default('0');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('packages');
	}
}
