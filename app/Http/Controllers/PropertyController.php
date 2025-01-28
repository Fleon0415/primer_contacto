<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // Mostrar todas las propiedades
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    // Mostrar una propiedad específica con sus transacciones
    public function show($id)
    {
        $property = Property::with('transactions')->find($id);
        if (!$property) {
            return redirect()->back()->with('error', 'Propiedad no encontrada.');
        }
        return view('properties.show', compact('property'));
    }
}
