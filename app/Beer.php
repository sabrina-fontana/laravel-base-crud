<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'nome', 
        'birrificio', 
        'colore', 
        'stile', 
        'nazione', 
        'gradi', 
        'prezzo', 
        'immagine'
    ];
}
