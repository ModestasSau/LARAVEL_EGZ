<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prekes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategorijos_id')->unsigned();
            $table->string('pavadinimas');
            $table->string('aprasymas')->nullable();
            $table->double('kaina');
            $table->integer('kiekis');
            $table->string('paveikslelis');
            $table->timestamps();
            $table->foreign('kategorijos_id')->references('id')->on('kategorijos')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prekes');
    }
};
