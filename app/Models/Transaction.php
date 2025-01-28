<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Relación con la propiedad asociada
    public function property()
    {
        return $this->belongsTo(Property::class); // Una transacción pertenece a una propiedad
    }

    // Relación con el cliente asociado
    public function client()
    {
        return $this->belongsTo(Client::class); // Una transacción pertenece a un cliente
    }

    // Relación con el agente asociado
    public function agent()
    {
        return $this->belongsTo(Agent::class); // Una transacción pertenece a un agente
    }
}
