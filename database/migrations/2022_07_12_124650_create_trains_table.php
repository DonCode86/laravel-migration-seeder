<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('Stazione di partenza', 50);
            $table->string('Stazione di arrivo',50);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->unsignedSmallInteger('Codice Treno');
            $table->unsignedTinyInteger('Numero Carrozze');
            $table->boolean('In orario')->default(true);
            $table->boolean('Cancellato')->default(false);       
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
        Schema::dropIfExists('trains');
    }
}
