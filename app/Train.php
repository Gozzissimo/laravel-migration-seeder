<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
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
        'Cancellato'
    ];
}
