<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addnullablefieldstobeerstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beers', function (Blueprint $table) {
            $table->string('colore', 10)->nullable()->change();
            $table->string('stile', 100)->nullable()->change();
            $table->string('nazione', 100)->nullable()->change();
            $table->float('gradi', 3, 1)->nullable()->change();
            $table->string('immagine', 2048)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beers', function (Blueprint $table) {
            //
        });
    }
}
