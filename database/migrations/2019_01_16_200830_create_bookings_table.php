<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('listing_id');
            $table->integer('user_id');
            $table->string('appointment_date', 15);
            $table->time('appointment_time');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email');
            $table->string('contact_number');
            $table->timestamps();
            $table->enum('is_valuation', ['0','1']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
