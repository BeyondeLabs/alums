<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alum', function (Blueprint $table) {
            $table->increments('id');
            $table->date('year_from');
            $table->date('year_to');
            $table->integer('user_id')->unsigned();
            $table->integer('stream_id')->unsigned();
            $table->integer('school_id')->unsigned();
            // $table->foreign('stream_id')->refences('id')->on('stream');
            // $table->foreign('school_id')->refences('id')->on('school');
            // $table->foreign('user_id')->refences('id')->on('users');
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
        Schema::drop('alum');
    }
}
