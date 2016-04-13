<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('img');
            $table->text('address');
            $table->string('email',150);
            $table->string('website',50);
            $table->string('phone1',25);
            $table->string('phone2',25);
            $table->string('mobile1',25);
            $table->string('mobile2',25);
            $table->string('password',100);
            $table->boolean('license');
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
        Schema::drop('agencies');
    }
}
