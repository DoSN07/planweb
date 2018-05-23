<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unique();
            $table->string('name');
            $table->integer('category');
            $table->string('description');
            $table->double('price');
            $table->integer('pricePer');
            $table->integer('address');
            $table->integer('contactNumber');;
            $table->string('contactEmail');
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
        Schema::drop('user_services');
    }
}
