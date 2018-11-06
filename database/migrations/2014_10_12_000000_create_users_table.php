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
            $table->enum('active', ['1', '0'])->default('0');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('password', 60);
            $table->string('tel');
            $table->string('itu_code');
            $table->enum('sex', ['1', '0'])->default('0');
            $table->enum('student', ['1', '0'])->default('0');
            $table->integer('year_birth');
            $table->integer('month_birth');
            $table->integer('day_birth');
            $table->string('avatar_user');
            $table->string('age_certification_image');
            $table->string('income_certification_image');
            $table->string('nice')->default(100);
            $table->string('point')->default(30);
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
