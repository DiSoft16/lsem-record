<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('fst_name');
            $table->string('mdl_name');
            $table->string('lst_name');
            $table->timestamp('dob');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('msn');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_activated');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
