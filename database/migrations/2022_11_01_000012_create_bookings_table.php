<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingsTable extends Migration {

	public function up()
	{
        $statuses = ['pending', 'processing', 'approved', 'canceled', 'completed'];

		Schema::create('bookings', function(Blueprint $table) use($statuses){
			$table->id();
			$table->string('booking_id')->unique();

            $table->foreignId('package_id')->constrained('packages');

            $table->foreignId('user_id')->constrained('users');

			$table->integer('persons')->default('0');
			$table->double('price')->default('0');
            $table->date('date');
			$table->enum('status', $statuses)->default($statuses[0]);

			$table->text('notes')->nullable()
                ->comment('This field created if user has special requirements!')
            ;
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('bookings');
	}
}
