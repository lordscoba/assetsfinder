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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->text('fax_number')->nullable();
            $table->mediumText('address')->nullable();
            $table->text('website')->nullable();
            $table->text('facebook_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->mediumText('image_path')->nullable();
            $table->mediumText('about')->nullable();
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
        Schema::dropIfExists('agencies');
    }
};
