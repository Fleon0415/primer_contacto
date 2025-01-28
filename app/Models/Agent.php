<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    // Relación con las transacciones
    public function transactions()
    {
        return $this->hasMany(Transaction::class); // Un agente puede manejar muchas transacciones
    }
}
