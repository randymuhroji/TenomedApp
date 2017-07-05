<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations',function(Blueprint $table){
            $table->increments('id');
            $table->integer('cafe_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('persons');
            $table->integer('total')->nullable();
            $table->string('bookingDate')->nullable();
            $table->integer('status')->nullable();
            $table->date('expired')->nullable();
            $table->string('desc')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cafe_id')->references('id')->on('cafes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservations');
    }
}