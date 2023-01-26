<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserInfosTable extends Migration {

	public function up()
	{
		Schema::create('user_infos', function(Blueprint $table) {
			$table->id();
			$table->string('name', 150);
			$table->string('mobile_no', 14);
			$table->mediumText('address')->nullable();

            $table->foreignId('booking_id')->constrained('bookings');

			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('user_infos');
	}
}
