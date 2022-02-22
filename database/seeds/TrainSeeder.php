<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->azienda = 'SNCF';
        $train->stazione_di_partenza = 'Paris';
        $train->stazione_di_arrivo = 'Salerno';
        $train->data_di_partenza = '2022-02-22';
        $train->orario_di_partenza = '11:00:00';
        $train->data_di_arrivo = '2022-02-23';
        $train->orario_di_arrivo = '02:00:00';
        $train->codice_treno = 'SN4263';
        $train->numero_carrozze = 12;
        $train->binario = 35;
        $train->in_orario = 1;
        $train->cancellato = 0;

        $train->save();
    }
}
