<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            // ID AUTA
            $table -> increments('id');

            // ZNACKA AUTA
            $table -> string('znacka');

            // TYP AUTA
            $table -> string('typ');

            // SPZ AUTA
            $table -> string('spz');

            // FARBA AUTA
            $table -> string('farba');

            // POCET NAJAZDENYCH KILOMETROV
            $table -> unsignedInteger('najazdene');

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
