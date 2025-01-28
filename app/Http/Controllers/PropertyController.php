<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // Obtener todas las transacciones de una propiedad
    public function showTransactions($propertyId)
    {
        // Encuentra la propiedad
        $property = Property::find($propertyId);

        // Verifica si la propiedad existe
        if (!$property) {
            return response()->json(['error' => 'Propiedad no encontrada'], 404);
        }

        // Obtén las transacciones relacionadas
        $transactions = $property->transactions;

        return response()->json($transactions);
    }

    public function store(StorePropertyRequest $request)
    {
        Property::create($request->validated());
        return redirect()->route('properties.index')->with('success', 'Propiedad creada.');
    }
    
}
