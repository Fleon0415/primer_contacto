<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    // Relación con las transacciones
    public function transactions()
    {
        return $this->hasMany(Transaction::class); // Una propiedad puede tener muchas transacciones
    }
}
