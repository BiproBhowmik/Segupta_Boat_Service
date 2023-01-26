<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
			$table->string('name', 150);
            $table->string('email')->unique();
            $table->string('mobile_no', 14)->unique()->nullable();
            $table->string('nid', 20)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('password', 100);
            $table->timestamp('email_verified_at')->nullable();
			$table->timestamps();
            $table->string('user_type')->default('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
