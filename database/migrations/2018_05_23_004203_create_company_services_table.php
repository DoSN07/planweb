<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companyId')->unique();
            $table->string('name');
            $table->integer('category');
            $table->string('description');
            $table->double('price');
            $table->integer('pricePer');
            $table->integer('address');
            $table->integer('legalNumber');
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
        Schema::drop('company_services');
    }
}
