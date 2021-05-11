<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornitoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornitores', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('referente');
            $table->string('indirizzo');
            $table->string('cap');
            $table->string('city');
            $table->string('country');
            $table->string('email');
            $table->string('phone');


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
        Schema::dropIfExists('fornitores');
    }
}
