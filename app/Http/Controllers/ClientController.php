<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Mostrar todos los clientes
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    // Mostrar un cliente con sus transacciones
    public function show($id)
    {
        $client = Client::with('transactions')->find($id);
        if (!$client) {
            return redirect()->back()->with('error', 'Cliente no encontrado.');
        }
        return view('clients.show', compact('client'));
    }
}
