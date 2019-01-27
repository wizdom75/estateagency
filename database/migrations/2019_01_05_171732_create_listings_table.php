<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title', 100);
            $table->string('post_code', 10);
            $table->text('features');
            $table->text('details');
            $table->tinyInteger('bedrooms');
            $table->tinyInteger('bathrooms');
            $table->tinyInteger('lounges');
            $table->unsignedInteger('price');
            $table->unsignedInteger('rent');
            $table->enum('type', ['Flat', 'Detached', 'Semi-Detached', 'Terraced', 'Terrace (End)', 'Cottage', 'Bungalow']);
            $table->enum('is_buy', ['Y','N']);
            $table->softDeletes();
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
        Schema::dropIfExists('listings');
    }
}
