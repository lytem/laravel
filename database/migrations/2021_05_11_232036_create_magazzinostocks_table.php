<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazzinostocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazzinostocks', function (Blueprint $table) {
            $table->id();

            $table->integer('ordini_id');
            $table->integer('product_id');
            $table->integer('quantita_entrata');
            $table->string('note');

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
        Schema::dropIfExists('magazzinostocks');
    }
}
