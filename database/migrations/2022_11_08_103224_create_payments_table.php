<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->constrained('users');
			$table->foreignId('booking_id')->constrained('bookings');
			$table->enum('method', array('Cash', 'Bkash'))->default('Cash');
			$table->string('transaction_id', 150)->nullable();
			$table->string('account_no')->nullable();
			$table->double('amount')->default('0');
			$table->enum('status', array('Unpaid', 'PartialPaid', 'Paid'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}
