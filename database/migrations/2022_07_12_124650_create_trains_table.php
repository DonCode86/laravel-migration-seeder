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
            $table->string('Stazione_di_partenza', 50);
            $table->string('Stazione_di_arrivo', 50);
            $table->time('Orario_di_partenza', 0);
            $table->time('Orario_di_arrivo', 0);
            $table->unsignedSmallInteger('Codice_Treno');
            $table->unsignedTinyInteger('Numero_Carrozze');
            $table->boolean('In_orario')->default(true);
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
