<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->string('national_id');
            $table->string('citizen_password');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('Nationality');
            $table->string('city');
            $table->string('address');
            $table->string('mobile');
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
        Schema::dropIfExists('citizens');
    }
}
