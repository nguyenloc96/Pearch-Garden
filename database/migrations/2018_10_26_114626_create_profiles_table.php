<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('profile_id');
            $table->longtext('self_introduce');
            $table->longtext('tweet');
            $table->string('height');
            $table->string('body_type');
            $table->string('birth_origin');
            $table->string('education');
            $table->string('annual_salary');
            $table->string('have_children');
            $table->string('job');
            $table->longtext('request_until_meet');
            $table->longtext('personality');
            $table->longtext('hobby');
            $table->longtext('good_place');
            $table->string('drinking_habit');
            $table->string('smoking_habit');
            $table->string('holiday');
            $table->string('age_certification_image');
            
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
