<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) 
        {
            // Azienda
            // Stazione di partenza
            // Stazione di arrivo
            // Orario di partenza
            // Orario di arrivo
            // Codice Treno
            // Numero Carrozze
            // In orario
            // Cancellato

            $table->string('Azienda', 50);
            $table->string('Stazione di partenza', 100);
            $table->string('Stazione di arrivo', 100);
            $table->time('Orario di partenza', 4);
            $table->time('Orario di arrivo', 4);
            $table->string('Codice Treno', 50);
            $table->tinyInteger('Numero Carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn([
                'Azienda',
                'Stazione di partenza',
                'Stazione di arrivo',
                'Orario di partenza',
                'Orario di arrivo',
                'Codice Treno',
                'Numero Carrozze',
                'In orario',
                'Cancellato']);
        });
    }
}
