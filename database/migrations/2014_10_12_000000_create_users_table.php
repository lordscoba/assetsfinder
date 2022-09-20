<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->date('birthday')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->integer('license_year')->nullable();
            $table->string('agent_status')->nullable(); //yes or no
            $table->mediumText('agency')->nullable();
            $table->mediumText('about_agent')->nullable();
            $table->mediumText('image_path')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('facebook_link')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('type')->default(0);
            /* Users: 0=>User, 1=>Admin, 2=>Manager */
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
        Schema::dropIfExists('users');
    }
};
