<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('birrificio', 50);
            $table->string('colore', 10);
            $table->string('stile', 100);
            $table->string('nazione', 100);
            $table->float('gradi', 3, 1);
            $table->float('prezzo', 5, 2);
            $table->string('immagine', 2048);
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
        Schema::dropIfExists('beers');
    }
}
