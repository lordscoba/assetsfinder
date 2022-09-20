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

        Schema::dropIfExists('properties');
        // Schema::dropIfExists('pictures');
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->mediumText('property_type')->nullable(); // type of house
            $table->text('property_status')->nullable(); //for sale or for rent
            $table->integer('property_price')->nullable();
            $table->integer('rooms')->nullable(); //number
            $table->integer('beds')->nullable();    //numberc
            $table->integer('halls')->nullable();   //number
            $table->integer('bathrooms')->nullable();   //number
            $table->integer('garage')->nullable();  //number
            $table->text('emergency_exit')->nullable();
            $table->text('cctv')->nullable();
            $table->text('free_wi_fi')->nullable();
            $table->text('free_parking_in_the_area')->nullable();
            $table->text('air_conditioning')->nullable();
            $table->text('area')->nullable(); // size in sq ft
            $table->integer('price')->nullable(); //
            $table->text('agency')->nullable();
            $table->string('email')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('address')->nullable();
            $table->integer('zip_code')->nullable();
            $table->text('country')->nullable();
            $table->text('city')->nullable();
            $table->text('landmark')->nullable();
            $table->text('video_link')->nullable();
            $table->integer('year_built')->nullable();  //available or sold
            $table->string('contact_email')->nullable();
            $table->text('contact_name')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('contact_phone_number')->nullable();
            $table->text('contact_telegram_link')->nullable();
            $table->text('contact_whatsapp_link')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
