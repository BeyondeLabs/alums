<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('country')->nullable()->default("KE");
            $table->string('region')->nullable();
            $table->string('town')->nullable();
            $table->string('email')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('fb_page')->nullable();
            $table->string('fb_group')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::drop('school');
    }
}
