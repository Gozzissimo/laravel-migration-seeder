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
            $table->string('Azienda', 50);
            // Stazione di partenza
            $table->string('Stazione di partenza', 100);
            // Stazione di arrivo
            $table->string('Stazione di arrivo', 100);
            // Data di partenza
            $table->time('Data di partenza', 4);
            // Orario di partenza
            $table->time('Orario di partenza', 4);
            // Data di arrivo
            $table->time('Data di arrivo', 4);
            // Orario di arrivo
            $table->time('Orario di arrivo', 4);
            // Codice Treno
            $table->string('Codice Treno', 50);
            // Numero Carrozze
            $table->tinyInteger('Numero Carrozze');
            // Binario
            $table->tinyInteger('Binario');
            // In orario
            $table->boolean('In orario');
            // Cancellato
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
                'Data di partenza',
                'Orario di partenza',
                'Data di arrivo',
                'Orario di arrivo',
                'Codice Treno',
                'Numero Carrozze',
                'Binario',
                'In orario',
                'Cancellato']);
        });
    }
}
