<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    // L'array fillable include tutti gli attributi con cui posso fare Mass assignment (when you send an array to the model creation)
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
